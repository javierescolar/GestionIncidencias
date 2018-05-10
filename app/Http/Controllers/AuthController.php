<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GsBase\GsBase;

class AuthController extends Controller
{
    public function getFormLogin(){
        return view('Auth/login');
    }

    public function postLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $gsbase = new GsBase($username,$password);

        $gsbase->accion="a_login";
        $gsbase->argumentos=json_encode(["username"=>$username,"password"=>$password]);
        
        $usuario=$gsbase->ejecuta();
        if($usuario!="{}"){
            $usu=json_decode($usuario);
            session()->put("user",$usu->usuario);
            return redirect('/');
        } 
        
        

      
        return redirect('/login');
        
    }

    public function logout(Request $request){
        
        $request->session()->forget('user');
        return redirect('/login');
    }
}
