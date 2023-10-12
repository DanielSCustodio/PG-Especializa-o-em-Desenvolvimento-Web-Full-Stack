<?php

class SavingsAccount extends BankAccount{

  public function withdraw($amount){
    if($this->balance >= $amount){
      $this->balance -= $amount;
    }
    else {
      return false;
    }

    return true;
  }
}