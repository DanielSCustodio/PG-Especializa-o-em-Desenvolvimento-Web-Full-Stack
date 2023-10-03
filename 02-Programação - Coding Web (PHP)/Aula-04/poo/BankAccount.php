<?php
  class BankAccount{
    protected $agency;
    protected $account;
    protected $balance;

    public function account($agency, $account, $balance){
      $this->agency = $agency;
      $this->account = $account;
      
      if($balance >= 0){
        $this->balance = $balance;
      }
    }

    public function showInfo(){
      $return = "----------------------------- <br>";
      $return = $return . "Dados da conta <br>";
      $return = $return . "Agência: " . $this->agency . "<br>";
      $return = $return . "Conta: " . $this->account . "<br>";
      $return = $return . "Saldo: " . $this->balance . "<br>";
      $return = $return . "----------------------------- <br>";
      return $return;
    }

  }