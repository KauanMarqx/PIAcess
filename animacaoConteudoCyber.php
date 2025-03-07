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
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerAnimacoes.php';?>

    <main>
      <article>
        <div class='row mt-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <h2 class="h1 mb-1">Cyberpunk: Edgerunners</h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2'>Novembro 23, 2022 by <cite><a href="https://br.ign.com/cyberpunk-edgerunners/102931/feature/cyberpunk-mercenarios-tera-temporada-2">br.ign.com</a></cite></small>
            <p>O anime Cyberpunk: Mercenários (Edgerunners), do Studio Trigger e CD Projekt Red para a Netflix, está fazendo bastante sucesso entre os assinantes do serviço -- tanto, inclusive, que o game Cyberpunk 2077, no qual ele é inspirado, teve um pico de jogadores simultâneos após a estreia da adaptação televisiva.</p>
            <p>Com apenas 10 episódios, o anime é relativamente curto. Após as rápidas maratonas, espectadores podem se perguntar: Cyberpunk: Mercenários terá uma temporada 2? Bem, o propósito deste artigo é responder a essa tão importante pergunta.</p>
          </div>
        </div>
        <figure class='row my-3'>
          <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
            <img class='rounded' src="img/imgAnimacao/destaques/img4Conteudo.webp" alt="Protagonista curtindo uma boate e usando drogas virtuais">
          </div>
          <figcaption class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
            <h4>Sobre a Imagem:</h4>
            <p>Protagonista curtindo uma boate e usando drogas virtuais.</p>
          </figcaption>
        </figure>
        <div class='row mb-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <p>O executivo da CDPR foi questionado sobre a continuação em entrevista recente à Famitsu (via VGC). Ele relata que “gostaria de continuar trabalhando com estúdios japoneses para produzir mais animes no futuro”, pois receberam um “feedback muito bom” da produção.</p>
            <p class='cite'>"No entanto, só para deixar claro, Cyberpunk Edgerunners foi planejado como um trabalho independente, então não existe algo como “estamos realmente trabalhando na segunda temporada nos bastidores”. Mesmo que pudéssemos fazer mais animes no futuro, não sei se seria a segunda temporada ou algo completamente diferente."</p>
            <p>O anime é produzido pelo Studio Trigger, estúdio japonês com sede em Tóquio, e dirigido por Hiroyuki Imaishi (de Gurren Lagann e Kill la Kill). A trilha sonora é responsabilidade de Akira Yamaoka, que trabalhou em Silent Hill.</p>
          </div>
        </div>
      </article>
    </main>
    <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaAnimacao1.php';?>
      <?php include 'include/noticiaAnimacao2.php';?>
    </div>
  </div>
  <?php include 'include/footer.php';?>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>