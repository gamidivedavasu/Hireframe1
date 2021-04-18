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
        $this->validate($REQUEST, [
            'selectuser' => 'required|not_in:disabled selected',
        ]);
        $id=$REQUEST->selectuser;
        $check=Feedback::where('userid',$id)->get('header');
        DB::beginTransaction();
        try {
        if($check->isNotempty())
        {
            return back()->with('error', 'Feedback already exists');
        }
        else{
        $data = new Feedback([
            'header'=>$REQUEST->get('header'),
            'bodyresult'=>$REQUEST->get('body-result'),
            'bodyfeedback'=>$REQUEST->get('body-feedback'),
            'userid'=>$id
        ]);
        }
    $data->save();
        DB::commit();
        return redirect('get-Feedback');
            }
            catch (\Throwable $th) {
                DB::rollBack();
                dd([$th->getMessage()]);
            }
    }
    public function listfeedback(){
        $data = Feedback::all();
        $userdata=User::get('name')->where('id',$data->get('userid'));
        return view('listfeedback')->with('data',$data)->with('usernames',$userdata);
    }

}