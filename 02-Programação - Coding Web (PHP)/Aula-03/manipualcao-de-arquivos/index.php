<?php
  //Nome do arquivo
  $file = "file.txt";
  $fileTwo = "file2.txt";
  $size = 400;
  $numberLines = 7;
  $text = "Final";

  //Abre o arquivo em modo r, apenas leitura
  $id = fopen($file, "r");

  //Mostra o número idenficador do arquivo aberto
  echo $id . "<br>";

  //Lê os primeirso bytes do arquivo de acordo com a variável "size"
  $content = fread($id, $size);
  echo "<b>Primeiros" . $size . " caracteres: </b>" . $content . "<br>";

  //Lê o arquivo completo
  $fullSize = filesize($file);
  $contentAll = fread($id, $fullSize);
  echo "<b>Conteúdo completo: </b>" .  $contentAll . "<br>";

  //Lê as primeiras linhas de acordo com a variável "numberLines"
  echo "<b>Leitura das " . $numberLines . " primeiras linhas.</b>";
  for ($n=1; $n <= $numberLines ; $n++) { 
      echo fgets($id) . "<br>";
  }

  //Abre o arquivo no modo escrita "a"
  $fileId = fopen($fileTwo, "a");
  //Mostra o número identicador do arquivo aberto
  echo $fileId;
  fwrite($fileId, $text);

  //Fecha o arquivo
  fclose($id);
  fclose($writeId)

?>