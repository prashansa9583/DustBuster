<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;

class Supervisor extends Controller
{
    public function show(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username); 
            $supervisorArr = DB::table('supervisor')->where('delete_status', 0)->get();
            //busArr is the array to store all the data from client table
            return view('supervisor',compact('supervisorArr','capsule'));
        }
    }
    
    public function create(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username); 
            return view('create_supervisor',compact('capsule'));   
        }
    }

    public function store(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //error handling
            $request->validate([
                'username'=>'max:25|regex:/^[a-z A-Z]+$/u',
                'email' => 'unique:supervisor,email|regex:[[a-zA-Z0-9._]+@[a-z]+.[a-z]{3}]' ,
                'phone'=>'unique:supervisor,phone|max:10|min:10|regex:/^[0-9]+$/u'
            ]);
            $password = bcrypt($request->input('password'));

            $query = DB::table('supervisor')->insert([
                        'username' => $request->input('username'),
                        'email' => $request->input('email'),
                        'phone' => $request->input('phone'),
                        'password' => $password
                    ]);

                    
            if ($query) {
                if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                    $username = $request->session()->get('user_name');
                    $mytime = Carbon\Carbon::now();
                    $arr = DB::table('supervisor')->where('username', '=',$request->input('username'))->get('id');
                    $details = $arr.",".$request->input('username').",".$request->input('email').",".$request->input('contact').",".$mytime->toDateTimeString();
                    DB::table('auditlog')->insert([
                        'actionBy' => $username,
                        'action' => 'Created Supervisor',
                        'actionDescription' => $details
                    ]);
                }
                else{
                    echo "Not Allowed to add";
                }
                $request->session()->flash('msg','DATA SAVED SUCCESSFULLY!!....');
                
                return redirect('supervisor_show');
            }
            else{
                $request->session()->flash('msg','ERROR OCCURED....');
                return redirect('supervisor_show');

            }
        }
    }

    public function edit($id,Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);
            $supervisorArr = DB::table('supervisor')->where('id',$id)->get();
            // echo $clientArr;
            return view('supervisor_edit',compact('supervisorArr','capsule'));   
        }
    }
 
    public function update(Request $request, $id)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //error handling
            $request->validate([
                'username'=>'max:25|regex:/^[a-z A-Z]+$/u',
                'email' => 'regex:[[a-zA-Z0-9._]+@[a-z]+.[a-z]{3}]' ,
                'phone'=>'max:10|min:10|regex:/^[0-9]+$/u'
            ]);

            $detail =  DB::table('supervisor')->where('id', $id)->get();
            if($request->input('password') != NULL){
                $password = bcrypt($request->input('password'));
            }
            else{
                $password = $detail[0]->password;
            }
    
        DB::table('supervisor')
              ->where('id', $id)
              ->update([
                    'username' => $request->input('username'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'password' => $password
                ]);

                if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                    $username = $request->session()->get('user_name');
                    $detail =  DB::table('supervisor')->where('id', $id)->get();
                    $mytime = Carbon\Carbon::now();
                    $details = $id.",".$request->input('username').",".$request->input('email').",".$request->input('contact').",".$mytime->toDateTimeString();

                    DB::table('auditlog')->insert([
                        'actionBy' => $username,
                        'action' => 'Updated Supervisor',
                        'actionDescription' => $details
                    ]);
                }
                else{
                    echo "Not Allowed to add";
                }
        
                // DB::table('client')->save();
                $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
                return redirect('supervisor_show'); 
            }         
    }

    public function destroy(Request $request,$id) //we are getting id from url so we can use it here
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            DB::table('supervisor')
            ->where('id',$id)
            ->update([
                'delete_status'=>'1',
            ]); 

            if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                $username = $request->session()->get('user_name');
                $detail =  DB::table('supervisor')->where('id', $id)->get();
                $mytime = Carbon\Carbon::now();

                $details = $id.",".$request->input('username').",".$request->input('email').",".$request->input('contact').",".$mytime->toDateTimeString();
                
                DB::table('auditLog')->insert([
                    'actionBy' => $username,
                    'action' => 'Deleted Supervisor',
                    'actionDescription' => $details
                ]);
            }
            else{
                echo "Not Allowed to add";
            }
        }
        
        $request->session()->flash('msg','All Of the DATA DELETED SUCCESSFULLY!!....');
        return redirect('supervisor_show');
        
    }
}
