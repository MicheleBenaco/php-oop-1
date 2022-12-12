<?php
include_once __DIR__ . '/movie.php';

$fast_end_furious = new Movie("fast end furious","azione","120","en","1",$attori);

// $avatar = new Movie("avatar","avventura","220","en","1");

$attore = new Attori("Vin Disel", "Protagonista", "tutte", "100k");

var_dump($attore);
var_dump($fast_end_furious);
// var_dump($avatar);


?>
<!-- "Vin Disel","Protagonista","tutte","100k" -->
<!-- "Luca Sdssw","Comparsa","2","1k" -->