<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interviewevaluation;
use App\Models\User;
use App\Models\ApplyJob;

class InterviewevaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {             
           //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::where('isadmin','0')->get();
        $role= Applyjob::all();
        return view('interview.interviewevaluation',compact('data','role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'n'=>'required',
            'j'=>'required',
            'category'=>'required',
            'opt'=>'required',
            'd'=>'required'
            
            
        ]);	
        
            $category_string=implode(",",$request->get('category'));
           $data= new InterviewEvaluation([
               'name'=>$request->get('n'),
               'category'=>$category_string,
               'jobrole'=>$request->get('j'),
               'option'=>$request->get('opt'),
               'description'=>$request->get('d')
         ]);
         $data->save();
         return redirect('data')->with('success','Data Inserted');      
        
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

    public function getjobrole($id)
    {
         $x = Applyjob::where("user_id",$id)
                    ->get();
        return json_encode($x);
    }



 

}

