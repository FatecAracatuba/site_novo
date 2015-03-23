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
    <?php include ("templates/carousel.html.php") ?>
    <div class="container">
      <hr>
      <h2 class="h2 text-center">Cursos</h2>
      <hr>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
          <p class="lead">ADS</p>
          <img src="images/logo-fatec.svg" class="img-thumbnail" alt="">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris.</p>
          <a href="#" class="btn btn-large btn-warning text-center">Saiba Mais</a>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
          <p class="lead">Biocombustíveis</p>
          <img src="images/logo-fatec.svg" class="img-thumbnail" alt="">
          <p class="text-justify">Teste Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris.</p>
          <a href="#" class="btn btn-large btn-warning centrali">Saiba Mais</a>
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