<?php
$saldo = 1575.56;

$saldo = $saldo - 375.15;

setcookie("accountBalance", $saldo);
$getCookie = $_COOKIE["accountBalance"];

echo "Seu saldo é de: " . $saldo . "<br>";
echo "Valor do saldo recuperado é: " . $getCookie . "<br><br><br>"; 

session_start();
if (isset($_POST['user']) && isset($_POST['email'])) {
  $user = $_POST['user'];
  $email = $_POST['email'];
  $_SESSION['u'] = $user;
  $_SESSION['e'] = $email;
  echo "As variáveis de sessão foram gravadas ";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Gravar dados na sessão</h3>
  <form action="" method="post" style="display: flex; flex-direction:column;">
    <label for="user"> Nome:
      <input type="text" name="user" id="user">
    </label>
    <label for="email">Email:
      <input type="email" name="email" id="email">
    </label>
    <input type="submit" value="Enviar" style="width: 75px;">
  </form>

  <?php
  // Recupera os valores da sessão
  echo "Usuario: " . $_SESSION['u'] . "<br>";
  echo "Email: " . $_SESSION['e'];
  ?>
</body>

</html>