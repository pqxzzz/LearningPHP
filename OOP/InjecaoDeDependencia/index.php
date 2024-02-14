<?php
// INJETAR UM OBJETO DE FORA PARA DENTRO DE OUTRA CLASSE
interface MatematicaBasica{
  public function somar($x, $y);
}
class Basico1 implements MatematicaBasica{
  public function somar($x, $y){
    return $x + $y;
  }
}

class Basico2 implements MatematicaBasica{
  public function somar($x, $y){
    $res = $x;
    for($q=0 ; $q<$y; $q++){
      $res++;
    }
    return $res;
  }
}

class Matematica {
  private $basico;
  public function __construct(MatematicaBasica $b){
    $this->basico = $b;
  }

  public function somar($x, $y){
    return $this->basico->somar($x, $y);
  }
}
$basico = new Basico1();
$mat = new Matematica($basico); // $mat = new Matematica(new Basico2());
echo $mat->somar(10,15);


// EXEMPLO 2
class Database{
  //listar 
  //selecionar um item
  //inserir
  //atualizar
  //deletar
  private $engine; 
  public function __construct(DatabaseInterface $eng){
    $this->engine = $eng;
  }

  public function listarTudo(){
    return $this->engine->listar();
  }
}
interface DatabaseInterface {
  public function listar();
}

class MySqlEngine implements DatabaseInterface{
  public function listar(){
    
  }
}
class OracleEngine implements DatabaseInterface{
  public function listar(){
    
  }
}
class MongoEngine implements DatabaseInterface{
  public function listar(){
    
  }
}

$db = new Database( new OracleEngine() );
$db->listarTudo();