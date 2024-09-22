<?php

namespace App\Http\Controllers;

use App\Models\Template;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;

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
            Storage::disk('public')->delete($ob->path);
          
        }
        $path = Storage::disk('public')->put('template',$request->path);
        Template::updateOrCreate(['id'=>1],['path' => $path]);
        return redirect()->route('template');
    }



}
