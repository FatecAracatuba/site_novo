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
          </ul>
        </div>
  		</div>
	  </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
