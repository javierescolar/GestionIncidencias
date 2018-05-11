<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GsBase\GsBase;
use App\Usuario;

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
        
        $data=$gsbase->ejecuta();
        if($data!="{}"){
            $data_json=json_decode($data);
            #convertimos el usuario gsbase en un usuario de la clase Usuario.php
            $usuario = new Usuario($data_json->usuario);
            
            session()->put("user",$usuario );
            return redirect('/');
        } 
        
        

      
        return redirect('/login');
        
    }

    public function logout(Request $request){
        
        $request->session()->forget('user');
        return redirect('/login');
    }
}
