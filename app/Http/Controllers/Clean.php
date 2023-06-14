<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DateTime;

class Clean extends Controller
{
    public function show(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //0->clean
            //1->unclean        
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);
            $allBusArr = DB::table('bus')->where('delete_status',0)->get('reg_plate') ;
            $clean = array();
            $finalArr = array();
            foreach ($allBusArr as $bus){
                $clean2 = array();
                $deepstatus = array();
                $vaccumstatus = array();
                $exteriorstatus = array();
                $interiorstatus = array();

                $reg_plate = $bus->reg_plate;

                $deepclean2 = DB::table('clean')->where('bus_reg_plate',$bus->reg_plate)->where('cleaning_type_id',"deep")->get('status');
                foreach($deepclean2 as $deep){
                    $deepstatus = $deep->status;
                }

                $vaccumclean2 = DB::table('clean')->where('bus_reg_plate',$bus->reg_plate)->where('cleaning_type_id',"vaccum")->get('status');
                foreach($vaccumclean2 as $vaccum){
                    $vaccumstatus = $vaccum->status;
                }

                $interiorclean2 = DB::table('clean')->where('bus_reg_plate',$bus->reg_plate)->where('cleaning_type_id',"interior")->get('status');
                foreach($interiorclean2 as $interior){
                    $interiorstatus = $interior->status;
                }

                $exteriorclean2 = DB::table('clean')->where('bus_reg_plate',$bus->reg_plate)->where('cleaning_type_id',"exterior")->get('status');
                foreach($exteriorclean2 as $exterior){
                    $exteriorstatus = $exterior->status;
                }
                
                if($deepstatus == 1 || $vaccumstatus == 1 || $interiorstatus == 1 || $exteriorstatus == 1){
                    array_push($clean2,$reg_plate,$deepstatus,$vaccumstatus,$interiorstatus,$exteriorstatus);
                    array_push($finalArr,$clean2);
                }
                else{
                    
                }
                // foreach($clean2 as $value){

                // }
            }


            // foreach ($allBusArr as $bus){
            //     $singlebus = $bus->reg_plate;
            //     // for ($i=0; $i < count($allBusArr) ; $i++) { 
            //     //     // $finalArr ['reg_plate'] = $singlebus;
            //     //     $finalArr[$i] = array_push($singlebus);
            //     // }
            //     $cleanArr = DB::table('clean')->where('bus_reg_plate', $singlebus)->where('delete_status', 0)->get();
            //     $finalClean[] = $cleanArr;
            //     // array_push($finalClean, $cleanArr);
            //     foreach ($cleanArr as $clean){
            //         $deep = 0;
            //         $vaccum = 0;
            //         $exterior = 0;
            //         $interior = 0;

            //         $deepStatus = DB::table('clean')->where('cleaning_type_id', "deep")->where('delete_status', 0)->get('status');
            //         // $finalArr['deepStatus'] = $deepStatus;
                    
            //         $vaccumStatus = DB::table('clean')->where('cleaning_type_id', "vaccum")->where('delete_status', 0)->get('status');
            //         // $finalArr['vaccumStatus'] = $vaccumStatus;
                    
            //         $exteriorStatus = DB::table('clean')->where('cleaning_type_id', "exterior")->where('delete_status', 0)->get('status');
            //         // $finalArr['exteriorStatus'] = $exteriorStatus;
                    
            //         $interiorStatus = DB::table('clean')->where('cleaning_type_id', "interior")->where('delete_status', 0)->get('status');
            //         // $finalArr['interiorStatus'] = $interiorStatus;

            //         // $finalArr = (array)$finalArr;
            //         $finalArr = $deepStatus.$vaccumStatus.$exteriorStatus.$interiorStatus;
            //     }
            // }
            // $cleanArr = DB::table('clean')->where('status', 1)->where('delete_status', 0)->get();

            //busArr is the array to store all the data from client table
            return view('scheduled_cleaning',compact('allBusArr','finalArr','clean2','capsule'));
        }
    }

    public function change_status($type, $bus, Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //0->clean
            //1->unclean        
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);

            $date = new DateTime;
            DB::table('auditlog')->insert([
                'actionBy' => $username,
                'action' => 'Status changed',
                'actionDescription' => $type
            ]);
            if ($type[0] == 1){
                DB::table('clean')->where('bus_reg_plate',$bus)->where('cleaning_type_id','deep')->update([
                    'status' => 0,
                    'cleaned_date' => $date,
                    'next_due_date' => date_add($date,date_interval_create_from_date_string("15 days")) 
                ]);

                DB::table('cleaning_audit_log')->insert([
                    'reg_plate' => $bus,
                    'actionBy' => $username,
                    'cleaning_type' => 'Deep Cleaning'
                ]);
            }
            elseif ($type[0] == 2){
                DB::table('clean')->where('bus_reg_plate',$bus)->where('cleaning_type_id','vaccum')->update([
                    'status' => 0,
                    'cleaned_date' => $date,
                    'next_due_date' => date_add($date,date_interval_create_from_date_string("7 days")) 
                ]);

                DB::table('cleaning_audit_log')->insert([
                    'reg_plate' => $bus,
                    'actionBy' => $username,
                    'cleaning_type' => 'Vaccum Cleaning'
                ]);
            }
            elseif ($type[0] == 3){
                DB::table('clean')->where("bus_reg_plate",$bus)->where('cleaning_type_id','interior')->update([
                    'status' => 0,
                    'cleaned_date' => $date,
                    'next_due_date' => date_add($date,date_interval_create_from_date_string("3 days")) 
                ]);

                DB::table('cleaning_audit_log')->insert([
                    'reg_plate' => $bus,
                    'actionBy' => $username,
                    'cleaning_type' => 'Interior Cleaning'
                ]);
            }
            elseif ($type[0] == 4){
                DB::table('clean')->where('bus_reg_plate',$bus)->where('cleaning_type_id','exterior')->update([
                    'status' => 0,
                    'cleaned_date' => $date,
                    'next_due_date' => date_add($date,date_interval_create_from_date_string("1 days")) 
                ]);

                DB::table('cleaning_audit_log')->insert([
                    'reg_plate' => $bus,
                    'actionBy' => $username,
                    'cleaning_type' => 'Exterior Cleaning'
                ]);
            }
            else{
                return redirect('SAdashboard');
                echo $type;
            }

            return redirect('scheduled_cleaning');
        }
    }

    public function deep_cleaning(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //0->clean
            //1->unclean        
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);
            $deepArr = DB::table('clean')->where('cleaning_type_id','deep')->where('status',1)->get();
            
            return view('deep_cleaning',compact('deepArr','capsule'));
        }
    }

    public function vaccum_cleaning(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //0->clean
            //1->unclean        
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);
            $vaccumArr = DB::table('clean')->where('cleaning_type_id','vaccum')->where('status',1)->get();
            
            return view('vaccum_cleaning',compact('vaccumArr','capsule'));
        }
    }

    public function interior_cleaning(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //0->clean
            //1->unclean        
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);
            $interiorArr = DB::table('clean')->where('cleaning_type_id','interior')->where('status',1)->get();
            
            return view('interior_cleaning',compact('interiorArr','capsule'));
        }
    }

    public function exterior_cleaning(Request $request)
    {
        if($request->session()->get('user_id')==""){
            return redirect ('/index');
        }
        else{
            //0->clean
            //1->unclean        
            $username = $request->session()->get('user_name');
            $capsule = array('username' => $username);
            $exteriorArr = DB::table('clean')->where('cleaning_type_id','exterior')->where('status',1)->get();
            
            return view('exterior_cleaning',compact('exteriorArr','capsule'));
        }
    }

    public function report(Request $request)
    {
        $date = new DateTime;
        $cleanArr = DB::table('clean')->where('cleaned_date',$date)->where('next_due_date',0)->get();
            // echo $caseArr;
        return view('report',compact('cleanArr'));
    }
}

