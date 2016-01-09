<?php include "index_modules.php" ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script src="js/facebook_timeline.js"></script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container page main">
			<hr>
				<h2 class="h2 text-center">Avisos</h2>
      <hr>
			<div class="row">
				<div class="col-md-3">
					<a class="btn btn-info" href="index.php">Voltar ao Início</a>
				</div>
				<div class="col-md-3">
					<a class="btn btn-info" href="avisos_painel.php">Painel de Avisos</a>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<?php
						$aviso = new Aviso();
						$avisos = $aviso->select_all();
					?>
					<?php 
						foreach($avisos as $aviso){
					?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4><?=$aviso['titulo']?></h4>
								</div>
								<div class="panel-body">
									<p class="pull-right"><small><span class="glyphicon glyphicon-time"></span> Enviado em <?=$aviso['data_envio']?> &nbsp Alterado em <?=$aviso['data_alteracao']?></small></p>
									<br><br>
									<p><?=$aviso['conteudo']?></p>
									<br>
									<hr>
									<a class="btn btn-info" href="aviso_detalhe.php?AVISO=<?=$aviso['id']?>">Ver mais</a>
								</div>
							</div>		
					<?php 
						}
					?>
				</div>
			<hr>
			</div>
		</div>
  <?php include ("templates/footer.html.php") ?>
  </body>
</html>
