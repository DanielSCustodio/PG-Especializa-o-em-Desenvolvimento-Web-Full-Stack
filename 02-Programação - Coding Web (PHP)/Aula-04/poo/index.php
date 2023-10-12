<?php
include("user.php");
include("Character.php");
include("BankAccount.php");
include("SavingsAccount.php");
include("Tv.php");

class Person
{
  public $name;
  protected $wage;
  private $cpf;
  public $isActual;
  public $departamnt;

  function __construct($name, $cpf, $departamnt)
  {
    $this->name = $name;
    $this->wage = 0;
    $this->cpf = $cpf;
    $this->isActual = false;
    $this->departamnt = $departamnt;
  }

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

  public function showWage()
  {
    echo "O salário do " . $this->name . " é de " . $this->wage . " de reais. <br>";
  }

  public function isActive()
  {
    $response = '';
    if ($this->isActual == true)
      $response =  "O funcionário " . $this->name . " já foi desligado da empresa. <br>";
    else {
      $this->isActual = true;
      $response =  " O funcionário " . $this->name . " acabou de ser  desligado da empresa. <br>";
    }

    echo $response;
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

$user = new User();
$car01 = new Car();
$car02 = new Car();
$person01 = new Person("João", "65656565", "T.I");
$person02 = new Person("Maria", "444555", "Adm");
$person03 = new Person("Judas", "545454545", "Adm");

$car01->branding = "Fiat";
$car02->branding = "Ford";

$person01->name = "João";
$person02->name = "Maria";

$user->name = "Sandra";

echo $car01->branding;
echo "<br>";
echo $car02->branding;
echo "<br>";
echo $person->name;
echo "<br>";
echo $person->departamnt;
echo "<br>";
$person01->showWage();
$person01->ChangeWage(2000);
$person01->showWage();
$person01->ChangeWage(50);
$person01->showWage();
$person02->isActive();
$person02->isActive();

if ($person03->name === null) {
  echo "Valor Nulo. <br>";
} else {
  echo $person03->name . "<br>";
  echo $person03->departamnt . "<br>";
}

echo $user->name . "<br><br><br>";

$luke = new Character();

$luke->name = "Luke Skywalker";
$luke->lightsaber = "Azul";
$luke->mentalStrength = "40";
$luke->physicalAbility = "60";

$anakin = new Character();

$anakin->name = "Anakin Skywalker";
$anakin->lightsaber = "vermelha";
$anakin->mentalStrength = "60";
$anakin->physicalAbility = "40";

$luke->ShowData();
$anakin->ShowData();

$contaDaniel = new BankAccount('0001', '0001-15', '100');
echo $contaDaniel->showInfo();
echo $contaDaniel->withdraw(100.25);
echo $contaDaniel->showBalance();
echo $contaDaniel->deposit(5);
echo $contaDaniel->showInfo();

$pessoa = new SavingsAccount('001', '0001-17', 300);
echo $pessoa->showInfo();
$pessoa->withdraw(350); // Não haverá por causa da validação na classe SavingsAccount
echo $pessoa->showInfo();

$tv = new TV();
$tv->On();
$tv->On('SBT');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body style="background-color: #000000; color: azure;">
  <?php
  include("header.php");
  ?>
  <h2>Seja Bem vindo(a) ao meu site!</h2>
</body>

</html>