<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class pageController extends Controller
{
    function home(){
        return view('Home');
    }

    function create(){
        return view('Create');
    }

    function login(){
        return view('Login');
    }

    function createSubmit(Request $req){

        $this->validate($req,
             [
                "name"=>"required|max:20|regex:/^[a-z ,.'-]+$/i",
                "id"=>"required|regex:/^([0-5]{3}-[0-9]{2}-[1-3]{2})+$/i",
                "dob"=>"required|date|before:-18 years",
                "email"=>"required|regex:/^([0-9]{2}-[0-9]{5}-[1-3]{1})@student\.aiub\.edu+$/i",
                "phone"=>'required|regex:/^\+[8]{2}[0-9]{11}+$/i',
                "password"=>"required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",
                "conf_password"=>"required|same:password"
             ],
            );

            $s = new student();
            $s->name = $req->name;
            $s->email = $req->email;
            $s->password = $req->password;
            $s ->save();


        return "Submitted with valid value";
    }

    function loginSubmit(Request $req){
        $this->validate($req,
        [
            "email"=>"required", 
            "password"=>"required"
        ],
    );

    $s = new student();
    $user=$s::where('email',$req->email)->where('password',$req->password)->value('email');
    if(!empty($user)){
        return view('Dashboard');
    }
    else{
        return "wrong password";
    }
    }
}
