<?php 

  $nomes = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

  if($nomes){

    $lista = file_get_contents('nome.txt');
    $nomes = '\n$nomes';
    $nomes .= $lista;
    file_put_contents('lista.txt', $nomes);
    header("Location: index.php");
    exit;

  }


?>