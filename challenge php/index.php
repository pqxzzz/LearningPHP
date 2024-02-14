<?php 
  session_start();

  $name = filter_input(INPUT_POST, 'nome');


  if($name){
    setcookie('nome', $name, time() + (3600));

    echo  "<h1>"."ola, ".$name."</h1>";
    echo "<a href='apagar.php'>Sair</a>";
  }

?>