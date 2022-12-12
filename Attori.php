<?php
class Attori{
    public $nameAttore;
    public $ruolo;
    public $scene;
    public $stipendio;


    function __construct($_ruolo,$_scene,$_stipendio,$_nameAttore){
        $this->nameAttore = $_nameAttore;
        $this->ruolo = $_ruolo;
        $this->scene = $_scene;
        $this->stipendio = $_stipendio;



    }
}

?>