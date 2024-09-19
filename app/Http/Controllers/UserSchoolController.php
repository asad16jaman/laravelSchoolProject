<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSchoolController extends Controller
{
    //
    function create(){
        
        return view('user.index');
    }
    function download_assesment(){
        return view('user.assmen_download');
    }
}
