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
    $persons = array(
      0 => array(
        "name" => "Carlos",
        "telephone" => "24955562312",
        "address" => "Rua B, 06",
        "date of birth" => "01/11/2020"
      ),
      1 => array(
        "name" => "Joana",
        "telephone" => "249631574862",
        "address" => "Rua D, 15",
        "date of birth" => "05/03/2020"
      ),
      2 => array(
        "name" => "Marisa",
        "telephone" => "2495315024796",
        "address" => "Rua J, 322",
        "date of birth" => "09/11/2020"
      ),
      3 => array(
        "name" => "Joaquim",
        "telephone" => "24925692014",
        "address" => "Rua A, 01",
        "date of birth" => "08/12/2020"
      ),
    );
    echo "<br>";
      $n = 7;
      for($cont = 0; $cont < $n; $cont++){
        echo ("--> $cont");
        echo "</br>";
      };
    echo "</br>";
    
    while ($n > 0) {
      echo "===> $n";
      echo "<br>";
      $n--;
    }
    echo "<br>";


    $x =10;
    do {
      $result = $x^2;
      echo "> $result";  
      echo "<br>";

      $x--;
    } while($x > 0);
    echo "<br>";

    $nota = 05;
    if($nota < 4){
      echo "Aluno reprovado!";
    }
    else if($nota >= 7){
      echo "Aluno aprovado";
    }
    else{
      echo "Auno em recuperação";
    }
    echo "</br>";
    $mes = 6;
    switch ($mes){
      case 1:
        echo "Janeiro";
        break;
      case 2:
        echo "Fevereiro";
        break;
      case 3:
        echo "Março";
        break;
      case 4:
        echo "Abril";
        break;
      case 5:
        echo "Maio";
        break;
      case 6:
        echo "Junho";
        break;
      
      default:
        echo "Mês inválido";
    }

    echo "</br>";  
    echo "Postagem $NPost </br>";
    $NPost +=1;
    echo "Postagem $NPost </br>";

    echo $persons[0]['name'];
    echo "</br>";
    echo $persons[1]['telephone'];
    echo "</br>";
        echo $persons[2]['address'];
    echo "</br>";
    echo $persons[3]['date of birth'];
    echo "</br>";

    echo "O valor de  pi é: "; echo PI;
    echo "</br>";
    echo "O valor de 'teste' é $teste e o valor de 'TESTE' é $TESTE";
    echo "</br>";
    echo "$saudacao";
    echo "</br>";
  ?>
</body>
</html>