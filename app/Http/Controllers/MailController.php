<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail($uid,$head)
    {

       $details=[
       'title'=>$head,
       'body'=>'This is for testing  gamil',
    ];

    
    $data=User::where('isadmin','0')->where('id',$uid)->get();
    $to =$data->pluck('email');
    
    
    Mail::to($to)->send(new TestMail($details));
    return "Email Sent";
    }

    

 
}


