<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){}

    
    public function generatefeedback($id){
        $templatedata = Template::find($id);
        return view('Generatefeedback')->with('templatedata',$templatedata);
    }

    public function storefeedback(Request $REQUEST){
        dd('Inside');
    }
}
