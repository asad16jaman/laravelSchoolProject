<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\School;
use App\Models\UserTemplate;
use Auth;
use Illuminate\Http\Request;
use App\Models\ConfirmTemplate;
use Illuminate\Support\Facades\Storage;
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
        $user = [];
        if(Auth::user()->role_id == 2){
            $user = User::where('school',false)->get();
        }
        

      
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
        ]);

        if($validate->fails()){
            return redirect()->route('school.create')->withErrors($validate->errors())->withInput();
        }

        $school_data = $request->all();
        if(Auth::user()->role_id == 1 ){
            $school_data['user_id'] = Auth::user()->id;
        }

        $ob = School::create($school_data);

        // update user table
        
        if(Auth::user()->role_id == 1 ){
            $authUser = User::find(Auth::user()->id);
            $authUser->school = true;
            $authUser->save();
        }else{
            $authUser = User::find($request->user_id);
            $authUser->school = true;
            $authUser->save();

        }

           


        if(Auth::user()->role_id == 1){
            return redirect()->route('dashboard')->with('status','successfully added Your School');
        }

        if($ob->type == 'basic'){
            return redirect()->route('basic.index')->with('status','successfully added Basic school');
        }else{
            return redirect()->route('senior.index')->with('status','successfully added Senior school');
        }

    }



    public function edit(int $id){
        $user = [];
       if(Auth::user()->role_id == 2){
        $user = User::all();
       }
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
        ]);

        if($validate->fails()){
            return redirect()->route('school.eidt',['id'=>$id])->withErrors($validate->errors())->withInput();
        }

        $updatedData = $request->all();
        unset($updatedData['_token']);
        School::where('id',$id)->update($updatedData);

        if(Auth::user()->role_id == 1){
            return redirect()->route('dashboard')->with('status','successfully added Basic school');
        }

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

            //all template regurding this school is deleted
            $userTem = UserTemplate::where('school_id' , $entity->id)->get();
            if(!empty($userTem)){
                foreach($userTem as $ob){
                    if(file_exists(storage_path().'/app/public/'.$ob->path)){
                        Storage::disk('public')->delete($ob->path);
                    }
                }
                UserTemplate::where('school_id' , $entity->id)->delete();
            }
            

           $confirmTable =  ConfirmTemplate::where('school_id',$entity->id)->get();
           if(!empty($confirmTable)){
                foreach($confirmTable as $ob){
                    if(file_exists(storage_path().'/app/public/'.$ob->path)){
                        Storage::disk('public')->delete($ob->path);
                    }
                }
                ConfirmTemplate::where('school_id',$entity->id)->delete();
           }
           
            
            $userId = $entity->user_id;

            // //delete entity
            $entity->delete();

            // //reset user school status
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
