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
        $this->validate($request, [
            'templatename' => 'required',
            'section1' => 'required',
            'section2' => 'required',
            'section3' => 'required',
            'section1body' => 'required',
            'section2body' => 'required',
            'section3body' => 'required',
        ]);
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
        return redirect('/listtemplates');
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

    public function edittemplate($id){
        $templatedata = Template::find($id);
        return view('edittemplate')->with('data',$templatedata);
    }

    public function updatetemplate(Request $REQUEST, $id){
        $data=Template::find($id);
        $this->validate($REQUEST, [
            'section1' => 'required',
            'section2' => 'required',
            'section3' => 'required',
            'section1body' => 'required',
            'section2body' => 'required',
            'section3body' => 'required',
        ]);
        DB::beginTransaction();
        try {
                $data->section1= $REQUEST->get('section1');
                $data->section2= $REQUEST->get('section2');
                $data->section3= $REQUEST->get('section3');
                $data->section1body= $REQUEST->get('section1body');
                $data->section2body= $REQUEST->get('section2body');
                $data->section3body= $REQUEST->get('section3body');
        $data->save();
        DB::commit();
        return redirect('/listtemplates');
        }
            
        catch (\Throwable $th) {
                DB::rollBack();
                dd([$th->getMessage()]);
            }
    }
}
