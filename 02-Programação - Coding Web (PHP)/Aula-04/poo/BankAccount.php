<?php
abstract class BankAccount
{
  protected $agency; //agencia
  protected $account; //conta
  protected $balance; //saldo

  //construtor
  function __construct($agency, $account, $balance)
  {
    $this->agency = $agency;
    $this->account = $account;
    if ($balance >= 0) {
      $this->balance = $balance;
    }
  }

  public function showInfo()
  {
    $response = "----------------------------- <br>";
    $response = $response . "Dados da conta <br>";
    $response = $response . "Agência: " . $this->agency . "<br>";
    $response = $response . "Conta: " . $this->account . "<br>";
    $response = $response . "Saldo: " . $this->balance . "<br>";
    $response = $response . "----------------------------- <br>";
    return $response;
  }

  //Depósito
  abstract function deposit($amount);

  //Sacar dinheiro
  abstract function withdraw($amount);

  //Mostrar Saldo
  public function showBalance()
  {
    return "Saldo: " . $this->balance . "<br>";
  }


}
