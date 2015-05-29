<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script src="js/facebook_timeline.js"></script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="carousel">
      <?php include ("templates/carousel.html.php") ?>
    </div>
    <div class="container page main">
      <hr>
      <h2 class="h2 text-center">Graduações</h2>
      <hr>
      <div class="row graduacoes">
        <div class="col-lg-4">
          <p class="lead">Análise e Desen. de Sistemas</p>
          <img src="images/cursos/ads.svg" class="img-thumbnail" alt="">
          <p class="text-justify">
            O técnólogo de Análise e Desenvolvimento de Sistemas analisa, projeta, implementa e atualiza sistemas de informação para diversas áreas de atividade, além de ter noções de gerenciamento.
      			Programa computadores e desenvolve softwares que aproveitam melhor as máquinas, ampliem a capacidade de armazenamento de dados e maior velocidade no processamento das informações.
      		</p>
          <a href="curso_ads.php" class="btn btn-large btn-warning text-center">Saiba Mais</a>
        </div>
        <div class="col-lg-4">
          <p class="lead">Gestão Empresarial</p>
          <img src="images/cursos/ead.svg" class="img-thumbnail" alt="">
          <p class="text-justify">
            O Tecnólogo em Gestão Empresarial (Processos Gerenciais) elabora e implementa planos de negócios, utilizando métodos e técnicas de gestão na formação e organização empresarial especificamente
            nos processos de comercialização, suprimento, armazenamento, movimentação de materiais e no gerenciamento de recursos financeiros e humanos.
		      </p>
          <a href="curso_ead.php" class="btn btn-large btn-warning centrali">Saiba Mais</a>
        </div>
        <div class="col-lg-4">
          <p class="lead">Biocombustíveis</p>
          <img src="images/cursos/bio.svg" class="img-thumbnail" alt="">
          <p class="text-justify">
            O tecnólogo da área de biocombustíveis conhece e aplica os processos de obtenção de biocombustíveis produzidos de materiais como cana-de-açúcar,
      			carvão vegetal e plantas oleaginosas (girassol, dendê, soja, amendoim, mamona). Desenvolve produtos
      			bioenergéticos (álcool combustível e biodiesel) e controla a produção e a qualidade das fontes alternativas de energia.
		      </p>
          <a href="curso_bio.php" class="btn btn-large btn-warning centrali">Saiba Mais</a>
        </div>
      </div>
      <hr>
      <h2 class="h2 text-center">Notícias no Facebook</h2>
      <hr>
      <div class="row">
        <article class="content">
          <div class="fb-like-box"
            data-href="https://www.facebook.com/fatecaracatuba"
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
