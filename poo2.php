<?php

class Famille {

    private $nom ="DELIVERT"; 

    public $prenom ="Lita";

    function getNom(){

        return $this->nom ;
    }
    public function setNom($nom) {

        $this->nom =$nom ;
    }
}
?>