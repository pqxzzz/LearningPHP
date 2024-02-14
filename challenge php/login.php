<?php 
  session_start();
  require('header.php');

  // if($_SESSION['nome']){
  //   header("Location: index.php");
  // }
?>

  <form method="POST" action="index.php">
    <label>
      Nome:
    <br/>
    <input type="text" name="nome" >
  </label>
  <input type="submit" value="Salvar">
  </form>