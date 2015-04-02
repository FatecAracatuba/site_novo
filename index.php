<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel='stylesheet' href='css/index.css'/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/facebook_timeline.js"></script>
    <title>.:: Fatec Araçatuba ::.</title>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container page">
      <?php include ("templates/carousel.html.php") ?>
      <hr>
      <h2 class="h2 text-center">Cursos</h2>
      <hr>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
          <p class="lead">ADS</p>
          <img src="images/cursos/ads.svg" class="img-thumbnail" alt="">
          <p class="text-justify">O técnólogo de ADS analisa, projeta, implementa e atualiza sistemas de informação para diversas áreas de atividade, além de ter noções de gerenciamento. 
			Programa computadores e desenvolve softwares que aproveitam melhor as máquinas, ampliem a capacidade de armazenamento de dados e maior velocidade no processamento das informações.
		  </p>
          <a href="curso_ads.php" class="btn btn-large btn-warning text-center">Saiba Mais</a>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
          <p class="lead">Biocombustíveis</p>
          <img src="images/cursos/bio.svg" class="img-thumbnail" alt="">
          <p class="text-justify">O tecnólogo da área de biocombustíveis conhece os processos de obtenção de biocombustíveis produzidos de materiais como cana-de-açúcar, 
			carvão vegetal e plantas oleaginosas (girassol, dendê, soja, amendoim, mamona). Desenvolve produtos 
			bioenergéticos (álcool combustível e biodiesel) e controla a produção e a qualidade das fontes alternativas de energia. 
		  </p>
          <a href="curso_bio.php" class="btn btn-large btn-warning centrali">Saiba Mais</a>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <hr>
      <h2 class="h2 text-center">Notícias no Facebook</h2>
      <hr>
      <div class="row">
        <article class="content">
          <div class="fb-like-box" data-href="https://www.facebook.com/fatecaracatuba" 
              data-width="760" data-height="848" data-colorscheme="light" 
              data-show-faces="false" data-header="false" data-stream="true" 
              data-show-border="false">
          </div>
        </article>
      </div>
    </div>
  <?php include ("templates/footer.html.php") ?>
  </body>
</html>