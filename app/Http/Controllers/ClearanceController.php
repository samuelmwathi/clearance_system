<?php

namespace App\Http\Controllers;

use App\Models\clearance;
use App\Models\Staff;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

        return view('clearance');

       
        
    }

    
    public function clearance_status()
    {
        $regno=Auth::user()->reg_staff_no;

        $clearance=clearance::where('regno',$regno)->get();



        return view('clearance_status',["clearance"=>$clearance]);
  
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $regno=Auth::user()->reg_staff_no;
        $officer_code=Staff::where('office','COD')->get();
       
        $name=$officer_code[0]['fname']." ".$officer_code[0]['lname'];
       $depatment=$officer_code[0]['dept'];
        $date=new DateTime();
        $newdate=$date->format('Y-m-d');
        $query=DB::select("INSERT INTO`clearances` ( `officer_name`, `depatment`,`regno`, `date_of_submission`, `date_processed`, `status`)
      VALUES('$name','$depatment','$regno','$newdate','','-1')");
    



     





        $officer_dos=Staff::where('office','DOS')->get();
        $name=$officer_dos[0]['fname']." ".$officer_dos[0]['lname'];
        $depatment=$officer_dos[0]['dept'];
         $date=new DateTime();
         $newdate=$date->format('Y-m-d');
         $query=DB::select("INSERT INTO`clearances` ( `officer_name`, `depatment`,`regno`, `date_of_submission`, `date_processed`, `status`)
       VALUES('$name','$depatment','$regno','$newdate','','-1')");
     
 


    //     $officer_lib=Staff::where('office','LIB')->get();
    //     $name=$officer_lib[0]['fname']." ".$officer_lib[0]['lname'];
    //     $depatment=$officer_lib[0]['dept'];
    //      $date=new DateTime();
    //      $newdate=$date->format('Y-m-d');
    //      $query=DB::select("INSERT INTO`clearances` ( `officer_name`, `depatment`,`regno`, `date_of_submission`, `date_processed`, `status`)
    //    VALUES('$name','$depatment','$regno','$newdate','','-1')");




    //     $officer_games=Staff::where('office','GAMES')->get();

    //     $name=$officer_games[0]['fname']." ".$officer_games[0]['lname'];
    //     $depatment=$officer_games[0]['dept'];
    //      $date=new DateTime();
    //      $newdate=$date->format('Y-m-d');
    //      $query=DB::select("INSERT INTO`clearances` ( `officer_name`, `depatment`,`regno`, `date_of_submission`, `date_processed`, `status`)
    //    VALUES('$name','$depatment','$regno','$newdate','','-1')");



    //     $officer_fee=Staff::where('office','FINANCE')->get();

    //     $name=$officer_fee[0]['fname']." ".$officer_fee[0]['lname'];
    //     $depatment=$officer_fee[0]['dept'];
    //      $date=new DateTime();
    //      $newdate=$date->format('Y-m-d');
    //      $query=DB::select("INSERT INTO`clearances` ( `officer_name`, `depatment`,`regno`, `date_of_submission`, `date_processed`, `status`)
    //    VALUES('$name','$depatment','$regno','$newdate','','-1')");




    //     $officer_deansch=Staff::where('office','DOSCH')->get();
    //     $name=$officer_deansch[0]['fname']." ".$officer_deansch[0]['lname'];
    //     $depatment=$officer_deansch[0]['dept'];
    //      $date=new DateTime();
    //      $newdate=$date->format('Y-m-d');
    //      $query=DB::select("INSERT INTO`clearances` ( `officer_name`, `depatment`,`regno`, `date_of_submission`, `date_processed`, `status`)
    //    VALUES('$name','$depatment','$regno','$newdate','','-1')");

       return redirect(route('clearance_status'))->with("message","clearance request sent Successfuly");
  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
