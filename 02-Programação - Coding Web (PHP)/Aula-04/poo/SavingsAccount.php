<?php

class SavingsAccount extends BankAccount{

  //Sacar
  public function withdraw($amount){
    if($this->balance >= $amount){
      $this->balance -= $amount;
      return "Foi feito um saque de R$" . $amount . " <br>";
    }
    else {
      return false;
    }
  
  }

  //Depósito
  public function deposit($amount)
  {
    if ($amount > 0) {
      $this->balance += $amount;
      return "Foi feito um depósito de R$" . $amount . " <br>";
    }
  }

}