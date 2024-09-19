<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    //

    public function index(){


            // $this->authorize('manage-users', User::class);
           
    
            return view('laravel-examples.users.index', ['users' => User::with('role')->get()]);
        

    }

    public function create(){
        // $this->authorize('manage-users', User::class);
        return view('laravel-examples.users.create' );
    }

    public function store(){

        $attributes = request()->validate([
            'email' => 'required|unique:users,email',
            'name' =>'required|',
            'password' => 'required|confirmed|min:7',
            'picture' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            'role_id' => 'required|exists:roles,id',
        ]);

        $path = request()->picture->store('profile', 'public');
        $attributes['picture'] = "$path";
       

        User::create($attributes);

        return redirect('users-management')->withStatus('User successfully created.');
    }

    public function edit($id){

        // $this->authorize('manage-users', User::class);

        return view('laravel-examples.users.edit', ['user' => User::find($id) ,'roles' => Role::get(['id','name'])]);

    }

    public function update($id){
        
        $attributes = request()->validate([
            'email' => 'required|unique:users,email,'.$id,
            'name' =>'required|',
            'picture' => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
            // 'password' => 'confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        


        if (request()->file('picture')){
        $currentAvatar = User::find($id)->picture;

            if($currentAvatar !== 'profile/avatar.jpg' && $currentAvatar !== 'profile/avatar2.jpg' && $currentAvatar !== 'profile/avatar3.jpg' && !empty($currentAvatar)){

                unlink(storage_path('app/public/'.$currentAvatar));
                $path = request()->picture->store('profile', 'public');
                $attributes['picture'] = "$path";
            }
            else{
                $path = request()->picture->store('profile', 'public');
                $attributes['picture'] = "$path";
            }
        }
        else{
            unset($attributes['picture']);
        }

        User::find($id)->update($attributes);

        return redirect('users-management')->withStatus('User successfully updated.');
    }

    public function destroy($id){

       

        $currentAvatar = User::find($id)->picture;

        if($currentAvatar !== 'profile/avatar.jpg' && $currentAvatar !== 'profile/avatar2.jpg' && $currentAvatar !== 'profile/avatar3.jpg' && !empty($currentAvatar)){
            unlink(storage_path('app/public/'.$currentAvatar));
        }
 
        User::find($id)->delete();
        
        return redirect('users-management')->withStatus('User successfully deleted.');
    }











}
