<?php 
// Bancos de Dados Relacionais e Não relacionais
// PHP utiliza 99% dos casos Bancos Relacionais
// CRUD 

$pdo = new PDO("mysql:dbname=b7_bancodedados;host=localhost", "root", "15!");

$sql = $pdo->query('SELECT * FROM usuarios');

echo "TOTAL: ".$sql->rowCount();

$dados = $sql->fetchAll( PDO::FETCH_ASSOC );

echo '<pre>';
print_r($dados);