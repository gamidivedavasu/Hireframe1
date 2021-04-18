<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendMail()
    {

       $details=[
       'title'=>'Mail from Happy Tech',
       'body'=>'This is for testing  gamil',
    ];

    
    $data=User::all();
    for($i=0;$i<count($data);$i++)
    {
       $to =$data[$i]->email;
       $info =array(
          "name"    =>$data[$i]->name,
          "email"   => $data[$i]->email
       );
    }
    Mail::to($to)->send(new TestMail($details));
    return "Email Sent";
    }

    

 
}


