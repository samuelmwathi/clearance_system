<?php

namespace App\Http\Controllers;

use App\Models\MissingMark as ModelsMissingMark;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class missingMark extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $user_reg=Auth::user()->reg_staff_no;
        $missingMark=DB::select("SELECT  * FROM missing_marks as m INNER JOIN staff  as s on m.lec_name=s.id WHERE m.regno='$user_reg'");


      

        
    
        
        return view("missing.status",['missingmarks'=>$missingMark]);
       
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       


        $staff=Staff::all();
        return view("missing.index",['staff'=>$staff]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $auth=Auth::user()->reg_staff_no;



        $missingMark=new ModelsMissingMark();

        $missingMark->std_name=$request->name;
        $missingMark->regno=$auth;
        $missingMark->phone=$request->phone;
        $missingMark->unit_name=$request->unit_name;
        $missingMark->unit_code=$request->unit_code;
        $missingMark->email=$request->email;
        $missingMark->lec_name=$request->lec_name;
        $missingMark->year=$request->year;
        $missingMark->session=$request->sem;
        $missingMark->status='-1';

        $missingMark->save();

        return redirect(route('missing_mark_index'))->with("message","successfuly added");
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
?>