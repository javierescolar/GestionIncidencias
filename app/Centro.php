<?php

namespace App;

class Centro {

    public $cod_centro;
    public $nom_centro;
    public $locales;

    public function __construct($cod_centro,$nom_centro){
        $this->cod_centro = $cod_centro;
        $this->nom_centro = $nom_centro;
        $this->locales = collect(); 
    }


   

}


?>