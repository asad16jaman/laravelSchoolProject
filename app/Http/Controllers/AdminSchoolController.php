<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminSchoolController extends Controller
{
    //

    function create(){
        $user = User::all();
        return view('admin.school.create',['users'=>$user]);
    }



    public function store(Request $request){

        $validate = Validator::make($request->all(),[
            'type' => ['required'],
            'name' => ['required'],
            'region' => ['required'],
            'district' => ['required'],
            'address' => ['required'],
            'headmaster_name' => ['required'],
            'contact' => ['required'],
            'user_id' => ['required'],
        ]);

        if($validate->fails()){
            return redirect()->route('school.create')->withErrors($validate->errors())->withInput();
        }

        $ob = School::create($request->all());

        if($ob->type == 'basic'){
            return redirect()->route('basic.index')->with('status','successfully added Basic school');
        }else{
            return redirect()->route('senior.index')->with('status','successfully added Senior school');
        }

        



    }








    function basicSchool_index(){
        $schools = School::where('type' , 'basic')->get();
        return view('admin.school.basicSchool',['schools'=>$schools]);
    }

    function seniorSchool_index(){
        $schools = School::where('type' , 'senior')->get();
        return view('admin.school.seniorSchool',['schools'=>$schools]);
    }




}
