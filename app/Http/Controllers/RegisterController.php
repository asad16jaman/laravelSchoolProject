<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brand;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){ 

        $attributes = request()->validate([
            'name'          => 'required|max:255',
            'email'         => 'required|email|max:255|unique:users,email',
            'password'      => 'required|min:7|max:255',
        ]);


        $attributes['role_id'] = 1;


        $user = User::create($attributes);

       
        auth()->login($user); 
        
        return to_route('dashboard');
    } 
}
