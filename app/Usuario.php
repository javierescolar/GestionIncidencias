<?php

namespace App;

class Usuario{

    public $id;
    public $nombre;
    public $apellidos;
    public $email;
    public $telefono;
    public $cargo;
    public $fecha_alta;
    public $cod_cliente;
    public $nom_cliente;
    public $username;
    public $password;


    public function __construct($objUsuGsbase){
        $this->id=$objUsuGsbase->id;
        $this->nombre=$objUsuGsbase->nombre;
        $this->apellidos=$objUsuGsbase->apellidos;
        $this->email=$objUsuGsbase->email;
        $this->telefono=$objUsuGsbase->telefono;
        $this->cargo=$objUsuGsbase->cargo;
        $this->fecha_alta=$objUsuGsbase->fecha_alta;
        $this->cod_cliente=$objUsuGsbase->cod_cliente;
        $this->nom_cliente=$objUsuGsbase->nom_cliente;
        $this->username=$objUsuGsbase->username;
        $this->password=$objUsuGsbase->password;
    }



}


?>