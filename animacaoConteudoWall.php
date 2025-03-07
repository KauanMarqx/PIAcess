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
            <h2 class="h1 mb-1">WALL-E</h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2'>Novembro 23, 2022 by <cite><a href="https://www.papodecinema.com.br/filmes/wall%C2%B7e/">www.papodecinema.com.br</a></cite></small>
            <p>Afirmar que Wall-E é simplesmente o melhor filme lançado em 2008 é pouco. Este clássico instantâneo merece muito mais. De cara, podemos afirmar que é a melhor produção assinada pela Pixar Animation, desde o início de sua parceria com os Estúdios Disney. </p>
            <p>E olha que o páreo é duro, batendo títulos impressionantes como Monstros S.A. (2001) e Os Incríveis (2004), entre tantos outros.</p>
            <p>É também a animação mais inteligente em muitos anos, superando obras que falam diretamente com o público adulto, como Persépolis (2007), Happy Feet (2006) e A Viagem de Chihiro (2001). E, por fim, é perfeito do início até sua conclusão, merecedor de todas as honrarias possíveis e absolutamente apto a ser analisado ao lado de qualquer outra produção dos mais diversos gêneros, extrapolando limites e barreiras convencionais.</p>
            <p>É o melhor do ano, independente de qualquer qualificação. Se A Bela e a Fera (1991) era, ao menos até então, o único desenho animado a ser indicado ao Oscar de Melhor Filme, Wall-E merecia mais: levar a cobiçada estatueta dourada para casa.</p>
          </div>
        </div>
        <figure class='row my-3'>
          <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
            <img class='rounded' src="img/home/img2Obra.jpg" alt="Wall-e (personagem principal do filme) olhando com esperança para o céu logo após o sol se pôr">
          </div>
          <figcaption class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
            <h4>Sobre a Imagem:</h4>
            <p>Nesta imagen podemos ver Wall-e em montanha de lixo olhando para o céu</p>
          </figcaption>
        </figure>
        <div class='row mb-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <p>A expressão ‘wall-e’ signfica “waste allocation load lifter – earth class”, que poderia ser livremente traduzido como “robô responsável pela reorganização de lixo – classe terrestre”. Ou seja, é um empilhador de entulho.</p>
            <p>E o protagonista desta aventura é o último de uma geração de máquinas responsáveis em “limpar a Terra”. Isso tudo está acontecendo há mais de 800 anos no futuro, quando o planeta deixou de ser habitável e toda a Humanidade vive numa gigantesca nave espacial há séculos. Wall-E leva uma vida solitária, tendo como companhia apenas uma barata (elas sobrevivem à tudo), encaixotando pilhas de lixo, até o dia em que encontra algo fora do seu cotidiano: uma pequena plantinha, um ser orgânico diferente de tudo que tenha visto até então.</p>
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