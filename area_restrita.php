<?php include "index_modules.php"; ?>
<?php include ("session.php") ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/tabs-links.js" ></script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">
			
                
				<h4>Area restrita</h4><br>
				<h5>Olá, <?php echo $_SESSION["user"];  ?></h5>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
