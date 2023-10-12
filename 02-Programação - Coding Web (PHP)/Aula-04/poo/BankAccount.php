<?php
class BankAccount
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
  public function deposit($amount)
  {
    if ($amount > 0) {
      $this->balance += $amount;
      return "Foi feito um depósito de R$" . $amount . " <br>";
    }
  }

  //Mostrar Saldo
  public function showBalance()
  {
    return "Saldo: " . $this->balance . "<br>";
  }

  //Sacar dinheiro
  public function withdraw($amount)
  {
    if ($amount > 0) {
      $this->balance -= $amount;
      return "Foi feito um saque de R$" . $amount . " <br>";
    }

  }

}
