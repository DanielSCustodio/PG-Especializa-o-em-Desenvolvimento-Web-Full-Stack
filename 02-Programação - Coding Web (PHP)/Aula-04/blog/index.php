<?php
class Connection
{
  private $User;
  private $Password;
  private $Db;
  private $Server;
  private $Conn;


  function __construct()
  {
    $User = 'root';
    $Password = '';
    $Db = 'blog';
    $Server = 'localhost';
  }

  function connect()
  {
    $this->Conn = mysqli_connect($this->Server, $this->User, $this->Password, $this->Db);
    if (mysqli_connect_errno())
      $status_connection = false;
    else
      $status_connection = true;

    return $status_connection;
  }
  
  
}

$Blog = new Connection();
if ($Blog->connect()) {
  header('Content-Type: text:html; charset=utf-8', true);
  
  include('principal.php');
} else {
  echo "Não foi possível acessae a base de dados! <br>";
}
