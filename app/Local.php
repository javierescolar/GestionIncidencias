<?php

namespace App;

class Local {

    public $cod_local;
    public $nom_local;

    public function __construct($cod_local,$nom_local){
        $this->cod_local = $cod_local;
        $this->nom_local = $nom_local;
    }

}


?>