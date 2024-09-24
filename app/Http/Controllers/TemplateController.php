<?php

namespace App\Http\Controllers;

use App\Models\ConfirmTemplate;
use App\Models\UserTemplate;
use File;
use Storage;
use App\Models\School;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    public function create(){

        return view('admin.template.create');
    }

    public  function store(Request $request){

        $validate = Validator::make($request->all(),[
            'path' => ['required','mimes:xlsx']
        ]);
        if($validate->fails()){
            return redirect()->route('template')->withErrors($validate->errors());
        }
        $ob = Template::find(1);
        
        if($ob){
            if(file_exists(storage_path().'/app/public/'.$ob->path)){
                Storage::disk('public')->delete($ob->path);
            }
        }
        $path = Storage::disk('public')->put('template',$request->path);
        Template::updateOrCreate(['id'=>1],['path' => $path]);
        return redirect()->route('template');
    }

    function download_template(int $id){
        $school = School::find($id);
        return view('admin.template.download', ['school' => $school]);
    }

    function downloaded(Request $request,int $id){

        $validate = Validator::make($request->all(),[
            'term' => 'required',
            'option' => 'required'
        ]);
        if($validate->fails()){
            return redirect()->route('admin.download',['id'=>$id])->withErrors($validate->errors())->withInput();
        }
        $qry = [
            'school_id' => $id,
            'term' => $request->term,
            'option' => $request->option
        ];

        $temp = UserTemplate::where($qry)->get();
        $school = School::find($id);
        

        if($temp->count() > 0){
            $fileName = str_replace(" ",'-',$school->name)."_".$request->term."_".$request->option;
           return response()->download(storage_path().'/app/public/'.$temp[0]->path,$fileName);
        }else{
            if($school->type == 'basic'){
                return redirect()->route('basic.index')->with('error','file not exists..');
            }else{
                return redirect()->route('senior.index')->with('error','file not exists..');
            }
            
        }




    }

    function upload(int $id){
        $mySchool = School::where('id',$id)->get();
       
        return view('user.index', ['school' => $mySchool]);
    }

    function template_store(Request $request,int $id){

        $validator = Validator::make($request->all(),[
            'school_id' => 'required',
            'term' => 'required',
            'option' => 'required',
            'path' => 'required|mimes:xlsx'
        ]);

        if($validator->fails()){
            return redirect()->route('admin.upload',['id'=>$id])->withErrors($validator->errors())->withInput();
        }

        $getData = [
            'school_id' => $request->school_id,
            'term' => $request->term,
            'option' => $request->option
        ];

        $old_data = ConfirmTemplate::where($getData)->get();

        $path = Storage::disk('public')->put('confirm_template',$request->path);
        $getData['path'] =$path;

        if($old_data->count()>0){
            if(file_exists(storage_path().'/app/public/'.$old_data[0]->path)){
                Storage::disk('public')->delete($old_data[0]->path);
            }
            
           ConfirmTemplate::where('id',$old_data[0]->id)->update($getData);

        }else{
            ConfirmTemplate::create(attributes: $getData);
        }
        $school = School::find($id);

        if($school->type == 'basic'){
            return redirect()->route('basic.index')->with('status','Successfully uploaded..');
        }else{
            return redirect()->route('senior.index')->with('status','Successfully uploaded..');
        }













    }



}
