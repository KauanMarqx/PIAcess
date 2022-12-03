<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerAnimacoes.php';?>
      

      <div class='row'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article class='pt-3'>
            <h2 class='h1 pt-5 m-0'>Os Destaques do Ano</h2>
            <small>Novembro 23, 2022 by Dimitri</small>
            <p class='border-top border-2 pt-2 mt-2'>Neste ano tivemos muitas obras que vem tendo muita relevância ultimamente, tendo em vista que ficção cientifica é um gênero que pode ser explorado de tantas formas, ver isso acontecendo na nossa frente com animações como:</p>
          </article>
        </div>
      </div>
      <section class='border destaques mt-3 p-0 p-3 rounded d-flex justfy-content-center align-items-center'>
        <div class='destaquesImg'>
          <img class='rounded' src="img/imgAnimacao/destaques/img1.webp" alt="Robô com a cor laranja">
        </div>
        <div class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Love, Death & Robots</h2>
          <p class='mb-3'>Love, Death & Robots é uma série que atualmente esta em streaming na Netflix que se resume a varios contos animados em seus diversos estilos de animação que podem variar de um 3d ultra realista á um cartunesco clássico...</p>
          <a href="animacaoConteudoRobots.php">Continuar Lendo...</a>
        </div>
      </section>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao2.php';?>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2 class='h2'>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="NoticiasConteudo.php">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.webp" alt="">
        </section>
      </div>
      <section class='border mt-5 destaques p-0 p-3 mb-5 rounded d-flex justfy-content-between align-items-center'>
      <div class='destaquesImg'>
          <img class='rounded' src="img/imgAnimacao/destaques/img2.webp" alt="Rick e morty com uma estética homens de preto colorido">
        </div>
        <div class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Rick and Morty</h2>
          <p class='mb-3'>Com sua arma capaz de criar portais para viajar no tempo-espaço, Rick leva Morty para explorar todos as absurdas formas de vida que o universo é capaz de sustentar. Apesar de genial, Rick tem sofre de alcoolismo e possui uma relação...</p>
          <a href="animacaoConteudoRick.php">Continuar Lendo...</a>
        </div>
      </section>
      <section class='border mt-5 destaques p-0 p-3 mb-5 rounded d-flex justfy-content-between align-items-center'>
      <div class='destaquesImg'>
          <img class='rounded' src="img/imgAnimacao/destaques/img3.webp" alt="Personagens da serie final space">
        </div>
        <div class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Final Space</h2>
          <p class='mb-3'>A ideia para a criação da série surgiu em meados de 2010, quando Olan Rogers disponibilizou um vídeo no seu canal pessoal no YouTube nomeado Gary Space como parte de uma websérie animada de 10 episódios. O projeto logo foi descontinuado com...</p>
          <a href="animacaoConteudoFinal.php">Continuar Lendo...</a>
        </div>
      </section>
      <section class='border mt-5 destaques p-0 p-3 mb-5 rounded d-flex justfy-content-between align-items-center'>
      <div class='destaquesImg'>
          <img class='rounded' src="img/imgAnimacao/destaques/img4.webp" alt="Protagonista da respectiva serie e a vilã">
        </div>
        <div class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Cyberpunk: Edgerunners</h2>
          <p class='mb-3'>O anime Cyberpunk: Mercenários (Edgerunners), do Studio Trigger e CD Projekt Red para a Netflix, está fazendo bastante sucesso entre os assinantes do serviço -- tanto, inclusive, que o game Cyberpunk 2077, no qual ele é...</p>
          <a href="animacaoConteudoCyber.php">Continuar Lendo...</a>
        </div>
      </section>
    </div>








    <?php include 'include/footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>