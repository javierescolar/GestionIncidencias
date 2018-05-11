<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GsBase\GsBase;
use App\Usuario;

class IncidenciaController extends Controller
{
    //
    public function getNueva(){
        $user = session()->get("user");

        $gsbase = new GsBase($user->username,$user->password);
        $gsbase->accion="a_get_centros_locales";
        $gsbase->argumentos=json_encode(["cod_cliente"=>$user->cod_cliente]);
        
        $data=$gsbase->ejecuta();
        if($data!="{}"){
            $data_json=json_decode($data);  
            $centros=$data_json->centros;
        } 
        return view('Incidencias.nueva',[
            'user'=>$user,
            'centros'=>$centros
        ]);
    }

}
