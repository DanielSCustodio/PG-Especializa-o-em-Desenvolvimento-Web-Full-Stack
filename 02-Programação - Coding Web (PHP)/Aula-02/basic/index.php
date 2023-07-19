<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width='device-width', initial-scale=1.0">
  <title>Basic</title>
</head>
<body>
  <?php
    $teste = 'false';
    $TESTE = 2;
    define('PI',3.1415926535);
    $NPost = 0;
    $NPost = $NPost+1;
    $saudacao = "Bom dia";


    echo "Postagem $NPost </br>";
    $NPost +=1;
    echo "Postagem $NPost </br>";


    echo "O valor de  pi é: "; echo PI;
    echo "</br>";
    echo "O valor de 'teste' é $teste e o valor de 'TESTE' é $TESTE";
    echo "</br>";
    echo "$saudacao";
    echo "</br>";


  ?>
</body>
</html>