<?php 
  session_start();

  $name = filter_input(INPUT_POST, 'nome');
  $age = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT );
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

  if($name && $age){
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $name, $expiracao);

    echo 'NOME:'. $name."<br>"."IDADE:".$age;
  }else{
    $_SESSION['aviso'] = "Preencha os itens corretamente.";
    header("Location: index.php");
    exit;
  }
?>