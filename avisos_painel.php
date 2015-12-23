<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
include ("index_modules.php");

if(!isset($_SESSION)){
	session_start();
}

if(isset($_POST['inserir_aviso'])){
	$Data_envio = date_format(time(), "Y/m/d");
	$Data_alteracao = date_format("Y/m/d", time());
	$Titulo = $_POST['titulo_aviso'];
	$Conteudo = $_POST['conteudo_aviso'];
	$Id_usuario = $_SESSION['id'];
	$aviso = new Aviso('', $Titulo, $Conteudo, $Data_envio, $Data_alteracao, 1, $Id_usuario);
	$aviso->save();
}

if(isset($_POST['editar_aviso'])){
	$Data_alteracao = date_format("Y/m/d", time());
	$Id_aviso = $_POST['id_aviso'];
	$Titulo = $_POST['titulo'];
	$Conteudo = $_POST['conteudo'];
	$Id_usuario = $_POST['id_usuario'];
	$aviso = new Aviso($Id_aviso, $Titulo, $Conteudo, '', $Data_alteracao, '', $Id_usuario);
	$aviso->update();
}

if(!empty($_POST['operacaoAjax'])){
	
	if($_POST['operacaoAjax'] == 'apagar_aviso'){
    $aviso = new Aviso();
    $aviso->delete($_POST['idaviso']);
    exit;
  }
	
  if($_POST['operacaoAjax'] == 'buscar_aviso'){
    header('Content-Type: application/json');
    $aviso = new Aviso();
    $aviso = $aviso->find($_POST['idaviso']);

    echo json_encode($aviso);

    exit;
  }
}

?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="data:application/octet-stream;base64,JChmdW5jdGlvbigpew0KCXZhciB1cmwgPSBkb2N1bWVudC5sb2NhdGlvbi50b1N0cmluZygpOw0KCWlmICh1cmwubWF0Y2goJyMnKSl7DQoJCSQoJy5uYXYtdGFicyBhW2hyZWY9IycrdXJsLnNwbGl0KCcjJylbMV0rJ10nKS50YWIoJ3Nob3cnKTsNCgl9DQoJJCgnLm5hdi10YWJzIGEnKS5vbignc2hvd24uYnMudGFiJywgZnVuY3Rpb24gKGUpIHsNCgkJd2luZG93LmxvY2F0aW9uLmhhc2ggPSBlLnRhcmdldC5oYXNoOw0KCX0pOw0KfSk7DQo=" ></script>
  </head>
  <body>
		<?php
      include ("templates/menu.html.php");
			if(!isset($_SESSION['logged'])){
        header('Location: ./');
      }
		?>
		<script type="text/javascript" src="js/aviso.js"></script>
    <div class="container main">
		<div class="container">
			<hr>
			<div class="row">
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_aviso">Cadastrar Aviso</button>
					</div>
				</div>
			</div>
			<hr>
			<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#banners" data-toggle="tab">Avisos</a>
          </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="banners">
					<hr>
						<ul>
							<li>Recentes</li>
							<li>Sem Respostas</li>
							<li>Populares</li>
						</ul>
					<hr>
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
												<hr>
												<p><?=$aviso['conteudo']?></p>
											</div>
											<div class="panel-footer">
												<a class="btn btn-default" href="aviso_detalhe.php">Ver mais</a>
												<a class="btn btn-success" data-toggle="modal" data-target="#modal_editar_aviso" data-id="<?=$aviso['id']?>">Editar</a>
												<a class="btn btn-warning">Fechar</a>
												<a class="btn btn-danger" onclick="excluir_aviso(<?=$aviso['id']?>)">Excluir</a>
											</div>
										</div>
										
									<?php 
										}
									?>
									
				</div>
				</div>
		</div>
		</div>
          <?php
				include ("templates/modal_insert_aviso.php");
				include ("templates/modal_edit_aviso.php");
        include ("templates/footer.html.php");
				
      ?>
  </body>
</html>
