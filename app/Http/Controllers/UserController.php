<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GsBase\GsBase;


class UserController extends Controller
{

    public function getPerfil(){
        $user=session()->get("user");
        return view("Usuario.perfil",['user'=>$user]);
    }
}
