<?php

namespace App\Http\Controllers;

use App\Models\ConfirmTemplate;
use App\Models\UserTemplate;
use Illuminate\Support\Facades\Validator;
use Storage;
use App\Models\School;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSchoolController extends Controller
{
    //
    function create(){
        $mySchool = School::where('user_id',Auth::user()->id)->get();
        return view('user.index', ['school' => $mySchool]);
    }

    function store(Request $request){

        $validator = Validator::make($request->all(),[
            'school_id' => 'required',
            'term' => 'required',
            'option' => 'required',
            'path' => 'required|mimes:xlsx'
        ]);

        if($validator->fails()){
            return redirect()->route('template.upload')->withErrors($validator->errors())->withInput();
        }

        $getData = [
            'school_id' => $request->school_id,
            'term' => $request->term,
            'option' => $request->option
        ];

        $old_data = UserTemplate::where($getData)->get();

        $path = Storage::disk('public')->put('user_template',$request->path);
        $getData['path'] =$path;

        if($old_data->count()>0){
            if(file_exists(storage_path().'/app/public/'.$old_data[0]->path)){
                Storage::disk('public')->delete($old_data[0]->path);
            }
            
           UserTemplate::where('id',$old_data[0]->id)->update($getData);

        }else{
            UserTemplate::create(attributes: $getData);
        }

        

       
       
        return redirect()->route('dashboard');

        

    }

    function template(){
        $template = Template::find(1);
        return response()->download(storage_path().'/app/public/'.$template->path,'template');
    }

    function download(){
        $mySchool = School::where('user_id',Auth::user()->id)->get();
        return view('admin.template.download',['school'=>$mySchool[0]]);
    }

    function confirm_download(Request $request){
        $validate = Validator::make($request->all(),[
            'term' => 'required',
            'option' => 'required'
        ]);
        if($validate->fails()){
            return redirect()->route('assesment.download')->withErrors($validate->errors())->withInput();
        }
        $qry = [
            'school_id' => $request->school_id,
            'term' => $request->term,
            'option' => $request->option
        ];

        $temp = ConfirmTemplate::where($qry)->get();
        $school = School::find($request->school_id);

        if($temp->count() > 0){
            $fileName = str_replace(" ",'-',$school->name)."_".$request->term."_".$request->option;
           return response()->download(storage_path().'/app/public/'.$temp[0]->path,$fileName);
        }else{
            
            return redirect()->route('dashboard')->with('error','this file is not exist...');
        }




    }



}
