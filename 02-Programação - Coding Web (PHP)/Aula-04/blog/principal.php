<!DOCTYPE html>
<?php
define('author', 'Daniel Custódio');
$NPosts = 0;

//Info Author
$InfoAuthor = array(
  "avatar" => "photo.jpeg",
  "name" => "Daniel Custódio",
  "description" => "Sou um programador web que se dedica ao desenvolvimento de sites e blogs. Utilizo diferentes linguagens de programação e também a plataforma Wordpress, que é uma ferramenta muito popular para criação de websites e blogs. Como programador web, minha principal tarefa é criar e manter websites, garantindo que o conteúdo esteja bem organizado e a navegação seja fácil e intuitiva para os usuários. Também trabalho em equipe, em colaboração com outros profissionais, como designers e especialistas em marketing digital, a fim de criar projetos completos e bem-sucedidos."
);

//Top 5
$top_five = array(
  1 => array(
    "img" => "post.png",
    "title" => "Dez motivos para aprender HTML + W3.css",
    "comments" => 142.
  ),
  2 => array(
    "img" => "post.png",
    "title" => "Experiência em gravidade zero",
    "comments" => 10.
  ),
  3 => array(
    "img" => "post2.png",
    "title" => "Como morar sozinho",
    "comments" => 7.
  ),
  4 => array(
    "img" => "post.png",
    "title" => "Melhores música anos 90",
    "comments" => 3.
  ),
  5 => array(
    "img" => "post2.png",
    "title" => "O que fazer em um sábado chuvoso",
    "comments" => 2.
  ),
);
//Posts

$postsHome = array(
  1 => array(
    "img" => "post.png",
    "PostTitle"  => "Games",
    "PostSubTitle" => "O mundo virtual está cada vez mais real.",
    "PostDate" => "Julho, 18, 2023",
    "PostText" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit earum, quae necessitatibus, consequatur obcaecati
                quos temporibus eveniet qui fuga sapiente deserunt minus debitis adipisci facilis rem officiis dignissimos. Facere,
                aliquid.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit earum, quae necessitatibus, consequatur obcaecati
                quos temporibus eveniet qui fuga sapiente deserunt minus debitis adipisci facilis rem officiis dignissimos. Facere,
                aliquid.",
    "comments" => "0",
  ),
  2 => array(
    "img" => "post2.png",
    "PostTitle"  => "Família",
    "PostSubTitle" => "Tire Férias.",
    "PostDate" => "Julho, 22, 2023",
    "PostText" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit earum, quae necessitatibus, consequatur obcaecati
                quos temporibus eveniet qui fuga sapiente deserunt minus debitis adipisci facilis rem officiis dignissimos. Facere,
                aliquid.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit earum, quae necessitatibus, consequatur obcaecati
                quos temporibus eveniet qui fuga sapiente deserunt minus debitis adipisci facilis rem officiis dignissimos. Facere,
                aliquid.",
    "comments" => "1",
  )
);


//Funções

function ShowCategories($name, $selected)
{
  $text = "";
  if ($selected)
    $text = "<span class='w3-tag w3-black w3-margin-bottom w3-margin-right'>";
  else
    $text = "<span class='w3-tag w3-light-grey w3-small w3-margin-bottom w3-margin-right'>";

  $text = $text . $name . "</span>";
  return $text;
}
?>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Meu Blog Pessol</title>
</head>

<body class="w3-light-grey">

  <header class="w3-container w3-center w3-padding-32">
    <h1><b>Meu Blog Pessoal</b></h1>
    <p>Criado por <?php echo author ?></p>
    <p>Olá, você!</p>
  </header>
  <div class="w3-row">
    <div class="w3-col w3-container" style="width: 65%;">
      <?php
      while ($count < count($postsHome)) {
        $count++;
      ?>
        <div class="w3-card-4 w3-margin w3-white">
          <img src="<?php echo $postsHome[$count]["img"]; ?>" alt="Postagem" style="width: 100%;">
          <div class="w3-container">
            <h3><b><?php echo $NPosts += 1 ?> - <?php echo $postsHome[$count]["PostTitle"] ?></b></h3>
            <h5>
              <?php echo $postsHome[$count]["PostSubTitle"] ?>
              <span class="w3-opacity"> <?php echo $postsHome[$count]["PostDate"] ?></span>
            </h5>
          </div>
          <div class="w3-container">
            <p> <?php echo $postsHome[$count]["PostText"] ?></p>
            <div class="w3-row">
              <div class="w3-col" style="width: 80%;">
                <p><button class="w3-button w3-padding-large w3-white w3-border">Leia Mais...</button></p>
              </div>
              <div class="w3-col w3-hide-small" style="width: 20%;">
                <p><span class="w3-padding-large w3-right"><b>Comentários</b> <span class="w3-tag"><?php echo $postsHome[$count]["comments"] ?></span></span></p>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="w3-col w3-container" style="width: 35%;">
      <div class="w3-card w3-margin">
        <img src=<?php echo $InfoAuthor["avatar"] ?> style="width: 30%;" alt="Photo">
        <div class="w3-container w3-white">
          <h4><?php echo $InfoAuthor["name"] ?> </h4>
          <p><?php echo $InfoAuthor["description"] ?></p>
        </div>
      </div>
      <hr>
      <div class="w3-card w3-margin">
        <div class="w3conatiner w3-padding">
          <h4>Postagens Mais Populares</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">

          <?php
          for ($i = 1; $i <= count($top_five); $i++) {
          ?>
            <li class="w3-padding-16">
              <img src="<?php echo $top_five[$i]["img"] ?>" class="w3-left w3-margin-right" style="width: 50px;">
              <span><?php echo $top_five[$i]["title"] ?></span>
              <br>
              <span>Comentários: <?php echo $top_five[$i]["comments"] ?></span>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
      <hr>
      <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
          <h4>Categorias</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <?php
            echo ShowCategories("Todas", true);
            echo ShowCategories("Viagens", false);
            echo ShowCategories("Esportes", false);
            echo ShowCategories("Política", false);
            echo ShowCategories("Família", false);
            echo ShowCategories("Games", false);
            ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <footer class="w3-container w3-dark-grey w3-margin-top w3-cell-row w3-padding-32">
    <div class="w3-container w3-cell w3-cell-middle">
      <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Anterior</button>
      <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Anterior</button>
    </div>
    <div class="w3-container w3-center  w3-cell-middle w3-cell-bottom">
      <p>Introdução ao Coding(web)</p>
    </div>
    <div class="w3-container w3-cell w3-cell-middle">
      <a href="#" class="w3-padding w3-xxlarge bi bi-facebook"></a>
      <a href="#" class="w3-padding w3-xxlarge bi bi-twitter"></a>
      <a href="#" class="w3-padding w3-xxlarge fa bi bi-instagram"></a>
    </div>
  </footer>
</body>

</html>