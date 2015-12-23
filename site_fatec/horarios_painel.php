<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
include ("index_modules.php");

if(isset($_POST['inserir_horario'])){
	$data_envio = date_create("Y/m/d", time());
	$curso = $_POST['curso'];
	$horario = new Horario('', $data_envio, '', $curso);
	$horario_pdf = $horario->horario_upload();
	$horario->save();
}

if(isset($_POST['editar_banner'])){
	$data_envio = date_create("Y/m/d", time());
	$id = $_POST['id_horario'];
	$curso = $_POST['curso'];
	$horario = new Horario('', $data_envio, '', $curso);
	$horario_pdf = $horario->horario_upload();
	$horario->update();
}

if(!empty($_POST['operacaoAjax'])){
	if($_POST['operacaoAjax'] == 'apagar_horario'){
    $horario = new Horario();
    $horario->delete($_POST['idhorario']);
    exit;
  }
  if($_POST['operacaoAjax'] == 'buscar_horario'){
    header('Content-Type: application/json');
    $horario = new Horario();
    $horario = $horario->find($_POST['idhorario']);

    echo json_encode($horario);

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
		?>
		<script type="text/javascript" src="js/horarios.js"></script>
    <div class="container main">
			<hr>
			<div class="row">
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_horario">Cadastrar Horário</button>
					</div>
				</div>
			</div>
			<hr>
			<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#horarios" data-toggle="tab">Horários</a>
          </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="horarios">
					<hr>
					<?php
							$horario = new Horario();
							$horarios = $horario->select_all();
					?>
									<?php 
										foreach($horarios as $horario){
									?>
											<a class="btn btn-info" data-toggle="modal" data-target="#modal_editar_horario" data-id="<?=$horario['id']?>" href="#" id="btn_editar_horario"><i class="glyphicon glyphicon-edit"></i> Editar</a>
											<a class="btn btn-danger" onclick="excluir_horario(<?=$horario['id']?>)" href="#" id="btn_excluir_horario"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
											<div class="media">
												<iframe src="<?=$horario['horario_pdf']?>"></iframe>
											</div>
											<?php 
											var_export($horario['horario_pdf']);
										}
									?>
									
				</div>
				</div>
		</div>
          <?php

        include ("templates/footer.html.php");
				include ("templates/modal_insert_horario.php");
				include ("templates/modal_edit_horario.php");
      ?>
  </body>
</html>