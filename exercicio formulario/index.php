<?php 
  session_start();
  require('header.php');

  if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
  }
?>

  <a href="apagar.php">Apagar cookies</a>

  <form method="POST" action="recebedor.php" >
    <label>
      Nome:
      <br/>
      <input type="text" name="nome" />
    </label>
      <br>
      <br>
    <label>
      Email:
      <br/>
      <input type="email" name="email" />
    </label>
      <br>
      <br>

      <label> 
        Idade:
        <br>
        <input type="text" name="idade">
      </label>
      <br>
      <br>

      <input type="submit" value="Enviar">

  </form>