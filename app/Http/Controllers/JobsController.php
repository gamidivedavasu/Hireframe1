<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job; 
use App\Models\Applyjob;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retreive all the jobs 
        //$jobs = Job::all();
        $jobs = Job::orderBy('jobClosingDate', 'asc')->paginate(10);
        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation for the create job form 
        $this->validate($request, [
            'jobTitle' => 'required',
            'jobReference' => 'required',
            'jobClosingDate' => 'required',
            'jobDescription' => 'required',
        ]);
       
        // Create job
        $job = new Job;
        $job->jobTitle = $request->input('jobTitle');
        $job->jobReference = $request->input('jobReference');
        $job->jobClosingDate = $request->input('jobClosingDate');
        $job->jobDescription = $request->input('jobDescription');
        $job->user_id = auth()->user()->id;
        $job->save();
        return redirect('/jobs')->with('success', 'Job Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show')->with('job', $job); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        
        // //Check if job exists before deleting
        // if (!isset($job)){
        //     return redirect('/jobs')->with('error', 'No Post Found');
        // }
        // // Check for correct user
        // if(auth()->user()->id !==$job->user_id){
        //     return redirect('/jobs')->with('error', 'Unauthorized Page');
        // }
        return view('jobs.edit')->with('job', $job);
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
        // validation for the create job form 
        $this->validate($request, [
            'jobTitle' => 'required',
            'jobReference' => 'required',
            'jobClosingDate' => 'required',
            'jobDescription' => 'required',
        ]);
        
        // Create job
        $job = Job::find($id);
        $job->jobTitle = $request->input('jobTitle');
        $job->jobReference = $request->input('jobReference');
        $job->jobClosingDate = $request->input('jobClosingDate');
        $job->jobDescription = $request->input('jobDescription');
        $job->user_id = auth()->user()->id;
        $job->save();
        return redirect('/jobs')->with('success', 'Job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        
        //Check if job exists before deleting
        if (!isset($job)){
            return redirect('/jobs')->with('error', 'No job Found');
        }
        // Check for correct user
        if(auth()->user()->id !==$job->user_id){
            return redirect('/jobs')->with('error', 'Unauthorized Page');
        }
        
        $job->delete();
        return redirect('/jobs')->with('success', 'job Removed');
    }

    // apply job
    public function applyJob($id){
        $job = Job::find($id);
        // var_dump($job);exit;
        return view('jobs.applyJob')->with('job', $job);
    }

    // store apply job data
    public function applyJobStore(Request $request, $id){
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'position'=>'required',
            'resume.*' => 'required|file|mimes:application/msword, text/anytext, text/plain|max:2048'
         ]);

        $applyJobModel = new Applyjob;
        $applyJobModel->name = $request->name;
        $applyJobModel->email = $request->email;
        $applyJobModel->phone = $request->phone;
        $applyJobModel->position = $request->position;

        if($request->file('resume')) {
            $resume = $request->file('resume');
            $fileName = time().'_'.$resume->getClientOriginalName();
            $filePath = $resume->move(storage_path().'/uploads', $fileName);
            $resume_path = $filePath . $fileName;

            $applyJobModel->resume_path = $resume_path;
            $applyJobModel->save();

            return back()
            ->with('success','Submitted Successfully')
            ->with('file', $fileName);
        }
        
    }
}
