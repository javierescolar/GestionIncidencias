<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GsBase\GsBase;
use App\Usuario;

class IncidenciaController extends Controller
{
    
    public function getNueva(){
        $user = session()->get("user");

        $gsbase = new GsBase($user->username,$user->password);
        $gsbase->accion="a_get_centros_locales";
        $gsbase->argumentos=json_encode(["cod_cliente"=>$user->cod_cliente]);
        
        $data=$gsbase->ejecuta();
        if(!in_array($data,["1","2","3","4","{}"])){
            $data_json=json_decode($data);  
            $centros=$data_json->centros;

            return view('Incidencias.nueva',[
                'user'=>$user,
                'centros'=>$centros,
                'zona'=>'Crear nueva Incidencia'
            ]);
        
        }
        
        return view('Home.index',[
            'user'=>$user,
            'zona'=>'Inicio',
            'mensajeInfo'=> 'No hay resultados'
        ]);
        
    }



    public function postNueva(Request $request){

        $cod_centro = $request->input('cod_centro');
        $cod_local = $request->input('cod_local');
        $incidencia = $request->input('incidencia');

        $user = session()->get("user");

        $gsbase = new GsBase($user->username,$user->password);
        $gsbase->accion="a_crea_incidencia";
        $gsbase->argumentos=json_encode([
            "username"=> $user->username,
            "cod_cliente"=>$user->cod_cliente,
            "cod_centro"=>$cod_centro,
            "cod_local"=>$cod_local,
            "incidencia"=>$incidencia
            ]);
   

        $data=$gsbase->ejecuta();

        
        if(!in_array($data,["1","2","3","4","{}"])){
            $data_json=json_decode($data);  

            
            
            if ($data_json->status==200){
                return view('Home.index',[
                    'user'=>$user,
                    'mensajeCorrecto'=>$data_json->mensaje,
                    'zona'=>'Inicio'
                ]);
            } else {
                return view('Home.index',[
                    'user'=>$user,
                    'mensajeError'=>$data_json->mensaje,
                    'zona'=>'Inicio'
                ]);
            }
           
        
        }
        
        return view('Home.index',[
            'user'=>$user,
            'zona'=>'Inicio',
            'mensajeInfo'=> 'No hay resultados'
        ]);
        
    }


    public function getTodas(){
        $user = session()->get("user");

        $gsbase = new GsBase($user->username,$user->password);
        $gsbase->accion="a_trae_incidencias_cliente";
        $gsbase->argumentos=json_encode(["cod_cliente"=>$user->cod_cliente]);
        
        $data=$gsbase->ejecuta();
        if(!in_array($data,["1","2","3","4","{}"])){
            $data_json=json_decode($data);  
           
            $incidencias=$data_json->incidencias;

            return view('Incidencias.incidencias',[
                'user'=>$user,
                'incidencias'=>$incidencias,
                'zona'=>'Todas las Incidencias'
            ]);
        } 
        

        return view('Home.index',[
            'user'=>$user,
            'zona'=>'Inicio',
            'mensajeInfo'=> 'No hay resultados'
        ]);
    }


    public function getPropias(){
        $user = session()->get("user");

        $gsbase = new GsBase($user->username,$user->password);
        $gsbase->accion="a_trae_incidencias_propias";
        $gsbase->argumentos=json_encode([
            "cod_cliente"=>$user->cod_cliente,
            "username"=>$user->username
            ]);
        
        $data=$gsbase->ejecuta();

     

        if(!in_array($data,["1","2","3","4","{}"])){
            $data_json=json_decode($data);  
            $incidencias=$data_json->incidencias;

            return view('Incidencias.incidencias',[
                'user'=>$user,
                'incidencias'=>$incidencias,
                'zona'=>'Mis Incidencias'
            ]);
        } 

        return view('Home.index',[
            'user'=>$user,
            'zona'=>'Inicio',
            'mensajeInfo'=> 'No hay resultados'
        ]);
        
    }

}
