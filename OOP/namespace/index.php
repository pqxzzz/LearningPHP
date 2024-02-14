<?php 
// forma de encapsular classes, constantes, etc dentro de um grupo

// require 'classe1.php';
// require 'classe2.php';

// $a = new classe1\MinhaClasse();
// echo $a->testar();

//utilizado para fazer divisao de diretorios: 
require 'classes/matematica/basico.php';
use classes\matematica\Basico as MatematicaBasica;
$matematicaBasica = new classes\matematica\Basico();