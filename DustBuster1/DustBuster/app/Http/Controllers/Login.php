<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Session;

class Login extends Controller
{
    public function check_cred(Request $request)
    {
        $email = $request->input('Email');
        $password = $request->input('password');
        $session = [];

        if(DB::table('admin')->where('email',$email)->exists()){
            $session2 = DB::table('admin')->where('email',$email)->get();

            if ($password == $session2[0]->password)
            {
                $session = DB::table('admin')->where('email',$email)->get();

                $request->session()->put('user_id',$session[0]->id);
                $request->session()->put('user_name',$session[0]->username);
                $username = $request->session()->get('user_name');

                    DB::table('auditLog')->insert([
                        'actionBy' => $username,
                        'action' => 'Admin Logged IN',
                        'actionDescription' => "NULL"
                    ]);
                return redirect('/welcome');
            }
        } 
        else{
            $session = [];
            $session1 = [];

            if(DB::table('supervisor')->where('email',$email)->exists()){
                $session = DB::table('supervisor')->where('email',$email)->get();
                if (Hash::check($password, $session[0]->password))
                {
                    $session = DB::table('supervisor')->where('email',$email)->get();

                    $request->session()->put('user_id',$session[0]->id);
                    $request->session()->put('user_name',$session[0]->email);
                    $username = $request->session()->get('user_name');

                    DB::table('auditLog')->insert([
                        'actionBy' => $username,
                        'action' => 'Supervisor Logged IN',
                        'actionDescription' => "NULL"
                    ]);
                    // return redirect ('/index')->with('msg','Supervisor-Id and password mismatched');

                    return redirect('SAdashboard');
                }
            }

            elseif(DB::table('manager')->where('email',$email)->exists()){
                $session1 = DB::table('manager')->where('email',$email)->get();
                if (Hash::check($password, $session1[0]->password))
                {
                    $session1 = DB::table('manager')->where('email',$email)->get();

                    $request->session()->put('user_id',$session[0]->id);
                    $request->session()->put('user_name',$session[0]->Email);
                    $username = $request->session()->get('user_name');

                    DB::table('auditLog')->insert([
                        'actionBy' => $username,
                        'action' => 'Manager Logged IN',
                        'actionDescription' => "NULL"
                    ]);
                    // return redirect('SAdashboard');
                    return redirect ('/index')->with('msg','Manager and password mismatched');

                }
            }
            else{
                return redirect ('/index')->with('msg','Email-Id and password mismatched');
            }

        }
    }

    public function protect(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            if (DB::table('admin')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                $username = $request->session()->get('user_name');

                $capsule = array('username' => $username);

                // $clientArr = DB::table('client')->where('delete_status', 0)->get();
                // $caseArr = DB::table('cl_case')->where('delete_status', 0)->get();
                // $billArr = DB::table('bill')
                //     ->where('delete_status', 0)
                //     // ->where('payment_status','Pending')
                //     ->get();
                // $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();                

                return view('Adashboard',compact('capsule'));

            }
            elseif (DB::table('supervisor')->where('username', '=',$request->session()->get('user_name'))->exists()) {
                $username = $request->session()->get('user_name');

                $capsule = array('username' => $username);

                // $clientArr = DB::table('client')->where('delete_status', 0)->get();
                // $caseArr = DB::table('cl_case')->where('delete_status', 0)->get();
                // $billArr = DB::table('bill')
                //     ->where('delete_status', 0)
                //     // ->where('payment_status','Pending')
                //     ->get();
                // $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();                

                return view('SAdashboard',compact('capsule'));

            }
            else{
                $username = $request->session()->get('user_name');

                $capsule = array('username' => $username);

                $adminArr = DB::table('admin')->where('delete_status', 0)->get();
        
                $financialArr = DB::table('financial_year')->where('delete_status', 0)->get();
        
                $auditArr = DB::table('auditlog')->where('delete_status', 0)->get();

                return view('SAdashboard',compact('capsule','adminArr','financialArr','auditArr'));
            }
        }
    }

    public function logout(Request $request) {
        $username = $request->session()->get('user_name');

                DB::table('auditlog')->insert([
                    'actionBy' => $username,
                    'action' => 'Logged OUT',
                    'actionDescription' => "NULL"
                ]);
        $request->session()->forget('user_id');
        $request->session()->forget('user_name');
        Session::flush();
        $request->session()->regenerate();
        
        return redirect('/index');
    }
    
    public function auditLog(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username); 
            $auditlogArr = DB::table('auditlog')->where('delete_status', 0)->get();
            return view('AuditLog',compact('auditlogArr','capsule')); 
        }
    }

}
