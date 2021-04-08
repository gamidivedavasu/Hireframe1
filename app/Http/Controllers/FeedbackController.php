<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){}

    
    public function generatefeedback($id){
        $templatedata = Template::find($id);
        return view('Generatefeeback')->with('templatedata',$templatedata);
    }
}
