<?php include ("index_modules.php"); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/grid.js"></script>
  	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
  	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
  	<script src="css/owl-carousel/owl.carousel.min.js"></script>
  </head>
  <body>
    <?php
      include ("templates/menu.html.php");
      if(!isset($_SESSION['logged'])){
        header('Location: ./');
      }
    ?>
    <div class="container main">
  		<div class="container">
        <div class="page-header">
          <h2>Estatísticas do Site</h2>
        </div>
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
				</div>
			<hr>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-xs-12">
						<h4 class="text-center">Dados dos Usuários</h4>

					</div>	
					<div class="col-lg-9 col-md-12 col-xs-12">
						<h4 class="text-center">Dados dos Formandos</h4>

					</div>
				</div>
      </div>
  	</div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
