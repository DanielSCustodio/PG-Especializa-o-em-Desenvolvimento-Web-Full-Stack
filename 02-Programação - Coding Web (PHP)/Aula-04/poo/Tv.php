<?php

class TV {

  private $channel;

  function __construct(){
    $this->channel = 1;
  }

  public function On(){
    $numArguments = func_num_args();
    if($numArguments === 0){
      echo "Liga a TV no canal padrão. Canal: " . $this->channel . "<br>";
    }
    else{
      if(is_numeric(func_get_arg(0))){ //verifica se o argumento na posição 0 é um número
        echo "Liga a TV no canal de número selecionado. Canal: " . func_get_arg(0) . "<br>"; 
      } else {
        echo "Liga a TV no canal de nome selecionado. Canal: " . func_get_arg(0) . "<br>"; 
      }
    }
  }

}