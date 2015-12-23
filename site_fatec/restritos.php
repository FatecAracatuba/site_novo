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
          <h2>Links restritos</h2>
        </div>
          <ul>
            <li><a href="mails.php">Página - Emails para a Direção</a></li>
						<li><a href="formandos_painel.php">Página - Inserção de turmas</a></li>
						<li><a href="banners_painel.php">Página - Inserção de Banners</a></li>
						<li><a href="horarios_painel.php">Página - Inserção de Horários</a></li>
						<li><a href="avisos_painel.php">Página - Inserção de Avisos</a></li>
          </ul>
        </div>
  		</div>
	  </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
