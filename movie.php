<?php
include_once __DIR__ . '/Attori.php';

// classe spostata da index.php per pulizia codice 
class Movie{
    public $name;
    public $genere;
    public $durata;
    public $lingua;

    public $valutazione;
    public $attori;

function __construct($_name, $_genere, $_durata, $_lingua, $_valutazione, Attori $_attori){
    $this->name = $_name;
    $this->genere = $_genere;
    $this->durata = $_durata;
    $this->lingua = $_lingua;
    $this->valutazione = $_valutazione;
    $this->attori = $_attori; 

    $this->setTime();

}

public function setTime(){
    if($this->durata < 140){
            $this->valutazione = "film corto";
    } else {
            $this->valutazione = "film lungo";
}

} 

        
}




?>