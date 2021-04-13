<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Feedback;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function index(){}

    
    public function generatefeedback($id){
        $templatedata = Template::find($id);
        $usersdata= User::where('isadmin',0)->get();
        return view('Generatefeedback')->with('usersdata',$usersdata)->with('data',$templatedata);
    }

    public function storefeedback(Request $REQUEST){
        DB::beginTransaction();
        try {
        $data = new Feedback([
            'header'=>$REQUEST->get('header'),
            'bodyresult'=>$REQUEST->get('body-result'),
            'bodyfeedback'=>$REQUEST->get('body-feedback')
        ]);
    $data->save();
        DB::commit();
        return redirect('/');
            }
            catch (\Throwable $th) {
                DB::rollBack();
                dd([$th->getMessage()]);
            }
}
}