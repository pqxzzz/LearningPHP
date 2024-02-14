
<form action="" method="post">
    <label for="nome">Novo Nome</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">adicionar</button>

    <h1>lista de nomes</h1>
   
</form>

<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$add = file_get_contents('texto.txt');

if(!empty($nome)){
    $add .=
"<ul>
    <li>
        $nome
    </li>
</ul>";
}
$nome = '';
file_put_contents('texto.txt', $add);
echo $add;



// $texto = file_get_contents('texto.txt');
// echo $texto;

?>

