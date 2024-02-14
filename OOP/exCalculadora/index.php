<?php 

  class Calculadora {
    private $valor = 0;
    public function add( $value){
      $this->valor = $this->valor + $value;
    }

    public function sub($value){
      $this->valor = $this->valor - $value;
    }

    public function multiply($value){
      $this->valor = $this->valor * $value;
    }

    public function divide($value){
      $this->valor = $this->valor / $value;
    }

    public function total(){
      return $this->valor;
    }
  }
  
  
  $calculadoratop = new Calculadora();  
  $calculadoratop->add(12);
  $calculadoratop->add(2);
  $calculadoratop->sub(1);
  $calculadoratop->multiply(3);
  $calculadoratop->divide(2);
  $calculadoratop->add(0.5);


  echo $calculadoratop->total();
?>