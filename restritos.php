<?php include ("index_modules.php"); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/grid.js"></script>
  	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
  	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
  	<script src="css/owl-carousel/owl.carousel.min.js"></script>
		<style type="text/css">
			.opcao_link{
				text-align: center;
				font-size: 18px;
				padding-top: 50px;
				height: 150px;
				width: 350px;
				background-color: aliceblue;
				border: 1px white solid;
			}
			
			.opcao_link:hover{
				background-color: #e7e7e7;
			}
		</style>
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
					<div class="row">
						<a href="perfil.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class="glyphicon glyphicon-user"></span> Página - Perfil
							</div>
						</a>
						<a href="usuarios.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user"></span> Página - Usuários
							</div>
						</a>
						<a href="mails.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class="glyphicon glyphicon-envelope"></span> Página - Emails para a Direção
							</div>
						</a>
						<a href="formandos_painel.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class=" glyphicon glyphicon-education"></span> Página - Cadastro de Formandos
							</div>
						</a>
						<a href="banners_painel.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class=" glyphicon glyphicon-picture"></span> Página - Cadastro de Banners
							</div>
						</a>
						<a href="horarios_painel.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class=" glyphicon glyphicon-time"></span> Página - Cadastro de Horários
							</div>
						</a>
						<a href="avisos_painel.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class=" glyphicon glyphicon-bell"></span> Página - Cadastro de Avisos
							</div>
						</a>
						<a href="estatisticas_painel.php">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class=" glyphicon glyphicon-signal"></span> Página - Estatísticas
							</div>
						</a>
						<a href="#">
							<div class="opcao_link col-lg-3 col-md-6 col-xs-12">
								<span class="glyphicon glyphicon-cog"></span> Página - Ajuda
							</div>
						</a>
					</div>
        </div>
  		</div>
	  </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
