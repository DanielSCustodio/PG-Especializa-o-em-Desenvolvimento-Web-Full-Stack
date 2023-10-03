<?php
  include "Jedi.php";

  class Character extends Jedi{
    public $name;

    public function ShowData(){
      echo "Dados do personagem: <br>";
      echo "Nome: " . $this->name . "<br>";
      echo "Sabre de luz: " . $this->lightsaber . "<br>";
      echo "Força mental: " . $this->mentalStrength . "<br>";
      echo "Habilidade Física: " . $this->physicalAbility . "<br>";

      $this->beJedi();
    }
  }