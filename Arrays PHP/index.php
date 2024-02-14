<?php 
  $array = [
    "nome" => "Colombo",
    "idade" => "43",
    "empresa" => "Porg",
    "cor" => "Verde",
    "profissao" => "texturemaker"
  ];

  $chaves = array_keys($array);
  $valores = array_values($array);
?>

<table border="1">
    <tr>
      <?php foreach($chaves as $chave): ?>
        <th> <?php echo $chave; ?> </th>
        <?php endforeach ?>
    </tr>
    <tr>
        <?php foreach($valores as $valor): ?>
          <th> <?php echo $valor; ?> </th>
        <?php endforeach ?>   
      </tr>
</table>