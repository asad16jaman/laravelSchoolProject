<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index(){

        $school = null;
        if(Auth::user()->role_id == 1){
            $school = School::where('user_id',Auth::user()->id)->get();
            if($school->count()>0){
                $school = $school[0];
            }else{
                $school = null;
            }
            return view('dashboard.index',['school' => $school]);
        }

        return view('dashboard.admin');

        
    }


    
}
