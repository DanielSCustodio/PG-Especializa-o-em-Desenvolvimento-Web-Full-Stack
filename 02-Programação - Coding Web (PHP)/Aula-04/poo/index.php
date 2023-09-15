<?php
class Client
{
  public $name;
  protected $wage;
  private $cpf;
  public $inactive;
  public $departamnt;
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
$person = new Client();

$car01->branding = "Fiat";
$car02->branding = "Ford";
$person->name = "Custódio";
$person->departamnt =  $person -> name;

echo $car01->branding;
echo "<br>";
echo $car02->branding;
echo "<br>";
echo $person->name;
echo "<br>";
echo $person->departamnt;
