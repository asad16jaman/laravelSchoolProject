<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminSchoolController extends Controller
{
    //

    function basicSchool_index(){
        $schools = School::with(['user' => function($query){
            $query->select('id','name');
            
        }])->where('type' , 'basic')->get();

        return view('admin.school.basicSchool',['schools'=>$schools]);
    }

    function seniorSchool_index(){
        $schools = School::where('type' , 'senior')->get();
        return view('admin.school.seniorSchool',['schools'=>$schools]);
    }

    function create(){
        $user = User::where('school',false)->get();

      
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
        $user = User::find($request->user_id);
        $user->school = true;
        $user->save();

        if($ob->type == 'basic'){
            return redirect()->route('basic.index')->with('status','successfully added Basic school');
        }else{
            return redirect()->route('senior.index')->with('status','successfully added Senior school');
        }

    }



    public function edit(int $id){
        $user = User::all();
        $school = School::find($id);
        return view('admin.school.edit',['users'=>$user,'school'=>$school]);
    }

    public function update(Request $request,int $id){

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
            return redirect()->route('school.eidt',['id'=>$id])->withErrors($validate->errors())->withInput();
        }

        $updatedData = $request->all();
        unset($updatedData['_token']);
         School::where('id',$id)->update($updatedData);

        if($request->type == 'basic'){
            return redirect()->route('basic.index')->with('status','successfully update Basic school');
        }else{
            return redirect()->route('senior.index')->with('status','successfully update Senior school');
        }

    }

    public function destroy($id){

        $entity = School::findOrFail($id);

        $schoolType = $entity->type;
        if($entity){
            $userId = $entity->user_id;
            $entity->delete();
            $user = User::find($userId);
            $user->school = false;
            $user->save();

            if($schoolType == 'basic'){
                return redirect()->route('basic.index')->with('status','successfully delete Basic school');
            }else{
                return redirect()->route('senior.index')->with('status','successfully delete Senior school');
            }

        }
        if($schoolType == 'basic'){
            return redirect()->route('basic.index')->with('error','this school is not exists');
        }else{
            return redirect()->route('senior.index')->with('error','this school is not exists');
        }
    }




    



    




}
