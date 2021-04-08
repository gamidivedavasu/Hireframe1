<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function viewforcreatetemplate(){
        return view('createtemplate');
    }

    public function storetemplate(Request $REQUEST){
        DB::beginTransaction();
        try {
            $data = new Template([
                'templatename'=>$REQUEST->get('templatename'),
                'section1'=>$REQUEST->get('section1'),
                'section2'=>$REQUEST->get('section2'),
                'section3'=>$REQUEST->get('section3'),
                'section1body'=>$REQUEST->get('section1body'),
                'section2body'=>$REQUEST->get('section2body'),
                'section3body'=>$REQUEST->get('section3body')
                ]);
        
        $data->save();
        DB::commit();
        dd('success');
            }
            catch (\Throwable $th) {
                DB::rollBack();
                dd([$th->getMessage()]);
            }
    }
    /**
    * Function to return list of templates
    */
    public function listtemplates(){
        $data = Template::all();
        return view('listtemplates')->with('data',$data);
    }

    public function edittemplate(){
    }
}
