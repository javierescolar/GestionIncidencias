<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        $user=session()->get("user");
        return view('Home/index',['user'=>$user,'zona'=>'Inicio']);
    }
}
