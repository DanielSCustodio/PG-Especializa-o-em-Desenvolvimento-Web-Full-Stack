<?php
class Person
{
  public $name;
  protected $wage = 0;
  private $cpf;
  public $inactive;
  public $departamnt;

  public function ChangeWage($newValue)
  {
    $return = "";
    if ($this->wage >= $newValue)
      $return =  "O funcionário " . $this->name . " teve o seu salário diminuido.<br>";
    else
      $return = "O funcionário " . $this->name . " teve seu salário aumentado. <br>";

    $this->wage = $newValue;
    echo $return;
  }

  public function showWage(){
    echo "O salário do " . $this->name . " é de " . $this->wage . " de reais. <br>";
  }

  public function isActive (){
    $response = '';
    if($this->inactive == true)
      $response =  "O funcionário " . $this->name . " já foi desligado da empresa. <br>";
    else{
      $this->inactive == true;
      $response =  " O funcionário " . $this->name . " acabou de ser  desligado da empresa. <br>";
    }
      
    return $response;
  }
}

class Car
{
  public $branding;
  public $model;
  public $color;
  public $qtdFuel;
  public $sizeFuelTank;
}

$car01 = new Car();
$car02 = new Car();
$person01 = new Person();
$person02 = new Person();

$car01->branding = "Fiat";
$car02->branding = "Ford";

$person01->name = "João";
$person02->name = "Maria";

echo $car01->branding;
echo "<br>";
echo $car02->branding;
echo "<br>";
echo $person->name;
echo "<br>";
echo $person->departamnt;
echo "<br>";
$person01 ->showWage();
$person01->ChangeWage(2000);
$person01->showWage();
$person01->ChangeWage(50);
$person01->showWage();
echo $person02->isActive();
echo $person02->isActive();