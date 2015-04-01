<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel='stylesheet' href='css/index.css'/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.media.js" ></script>
    <script src="js/stick.js"></script>
    <script type="text/javascript">
      $(function() {
          $('a.media').media({width:770, height:700});
      });
    </script>
    <title>.:: Fatec Araçatuba ::.</title>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container page">  
      <?php include ("templates/ads.html.php") ?>   
    </div>
  <?php include ("templates/footer.html.php") ?>
  </body>
</html>