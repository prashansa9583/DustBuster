<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;

class Bus extends Controller
{
    public function show(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username); 
            $busArr = DB::table('bus')->where('delete_status', 0)->get();
            //busArr is the array to store all the data from client table
            return view('bus',compact('busArr','capsule'));
        
            //compact function will pass the clientArr to view
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
            return view('create_bus',compact('capsule'));   
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
                'reg_plate'=>'max:25|unique:bus,reg_plate'
            ]);


            $query = DB::table('bus')->insert([
                        'reg_plate' => $request->input('reg_plate'),
                        'model' => $request->input('model')
                    ]);

                    
            if ($query) {
                if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                    $username = $request->session()->get('user_name');
                    $mytime = Carbon\Carbon::now();
                    $arr = DB::table('bus')->where('reg_plate', '=',$request->input('reg_plate'))->get('id');
                    $details = $arr.",".$request->input('reg_plate').",".$request->input('coordinator_name').",".$request->input('gender').",".$request->input('email').",".$request->input('dob').",".$request->input('contact').",".$request->input('address').",".$mytime->toDateTimeString();
                    DB::table('auditlog')->insert([
                        'actionBy' => $username,
                        'action' => 'Created Bus',
                        'actionDescription' => $details
                    ]);
                }
                else{
                    echo "Not Allowed to add";
                }
                $request->session()->flash('msg','DATA SAVED SUCCESSFULLY!!....');
                
                return redirect('bus_show');
            }
            else{
                $request->session()->flash('msg','ERROR OCCURED....');
                return redirect('client_show');

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
            $busArr = DB::table('bus')->where('id',$id)->get();
            // echo $clientArr;
            return view('bus_edit',compact('busArr','capsule'));   
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
                // 'reg_plate'=>'max:25|unique:bus,reg_plate'
            ]);
    
        DB::table('bus')
              ->where('id', $id)
              ->update([
                'reg_plate' => $request->input('reg_plate'),
                'model' => $request->input('model')
                ]);

                if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                    $username = $request->session()->get('user_name');
                    $detail =  DB::table('bus')->where('id', $id)->get();
                    $details = $id.",".$request->input('reg_plate').",".$request->input('model').",".$detail[0]->created_at.",".$detail[0]->updated_at;
                    DB::table('auditlog')->insert([
                        'actionBy' => $username,
                        'action' => 'Updated Bus',
                        'actionDescription' => $details
                    ]);
                }
                else{
                    echo "Not Allowed to add";
                }
        
        // DB::table('client')->save();
        $request->session()->flash('msg','DATA UPDATED SUCCESSFULLY!!....');
        return redirect('bus_show'); 
            }         
    }

    public function destroy(Request $request,$id) //we are getting id from url so we can use it here
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            DB::table('bus')
            ->where('id',$id)
            ->update([
                'delete_status'=>'1',
            ]); 

            if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                $username = $request->session()->get('user_name');
                $detail =  DB::table('bus')->where('id', $id)->get();
                $details = $id.",".$detail[0]->reg_plate.",".$detail[0]->model.",".$detail[0]->created_at.",".$detail[0]->updated_at;
                DB::table('auditLog')->insert([
                    'actionBy' => $username,
                    'action' => 'Deleted Bus',
                    'actionDescription' => $details
                ]);
            }
            else{
                echo "Not Allowed to add";
            }
        }
        
        $request->session()->flash('msg','All Of the DATA DELETED SUCCESSFULLY!!....');
        return redirect('bus_show');
        
    }
}
