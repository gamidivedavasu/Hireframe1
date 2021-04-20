<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail($uid,$head,$body)
    {

       $details=[
       'title'=>$head,
       'body'=>$body,
    ];

    
    $data=User::where('isadmin','0')->where('id',$uid)->get();
    $to =$data->pluck('email');
    
    
    Mail::to($to)->send(new TestMail($details));
    return "Email Sent";
    }

    

 
}


