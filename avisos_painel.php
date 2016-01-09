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
	$Data_envio = date('d/m/Y H:i:s');
	//$Data_envio .= ' '.date('H:i:s');
	$Data_alteracao = date('d/m/Y H:i:s');
	//$Data_alteracao .= ' '.date('H:i:s');
	$Titulo = $_POST['titulo_aviso'];
	$Conteudo = $_POST['conteudo_aviso'];
	$Id_usuario = $_SESSION['id'];
	$aviso = new Aviso('', $Titulo, $Conteudo, $Data_envio, $Data_alteracao, 1, $Id_usuario);
	$aviso->save();
}

if(isset($_POST['editar_aviso'])){
	$Data_alteracao = date('d/m/Y H:i:s');
	//$Data_alteracao .= ' '.date('H:i:s');
	$Id_aviso = $_POST['id_aviso'];
	$Titulo = $_POST['titulo'];
	$Conteudo = $_POST['conteudo'];
	$Id_usuario = $_POST['id_usuario'];
	$aviso = new Aviso($Id_aviso, $Titulo, $Conteudo, '', $Data_alteracao, '', $Id_usuario);
	$aviso->update();
	header("location:avisos_painel.php");
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
		<link rel="stylesheet" type="text/css" href="js/datatables/dataTables.bootstrap.css">
    <script type="text/javascript" language="javascript" src="js/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
			$(function(){
        $('#to-view').DataTable({
          "language": { "url": "js/datatables/pt-BR.json" },
          "order": [[ 4, 'desc' ], [ 3, 'desc' ]]
        });

        $('#dados_aviso').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var _id = button.data('id')
          var modal = $(this)
          $.ajax({
            type: "GET",
            url: "modules/json/aviso.json.php",
            dataType: "json",
            data: {id: _id},
            success: function(message){
              console.log(message);
							//modal.find('#photo').text(message.foto)
							modal.find('#titulo').text(message.titulo)
              modal.find('#conteudo').text(message.conteudo)
							modal.find('#data_envio').text(message.data_envio)
							modal.find('#data_alteracao').text(message.data_alteracao)
            },
            error: function(data){
              console.log("Error!")
              console.log(data)
            }
          });
        });
      });
		</script>
		<div class="container main">
			<div class="container">
			<hr>
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_aviso">Cadastrar Aviso</button>
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
						<?php
							$aviso = new Aviso();
							$avisos = $aviso->select_all();
						?>
						<hr>
						<?php
							if ($avisos != false):
						?>
						<table id="to-view" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Detalhes</th>
									<th>Titulo</th>
									<th>Conteúdo</th>
									<th>Enviado em</th>
									<th>Alterado em</th>
									<th></th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									for ($i=0; $i < sizeof($avisos); $i++) {
										$id = $avisos[$i]['id'];
										$titulo = $avisos[$i]['titulo'];
										$conteudo = $avisos[$i]['conteudo'];
										$data_envio = date("d/m/Y H:i:s", strtotime($avisos[$i]['data_envio']));
										$data_alteracao = date("d/m/Y H:i:s", strtotime($avisos[$i]['data_alteracao']));
										echo
											"<tr>
												<td> <span class='glyphicon glyphicon-bell'></span> <a data-id='$id' data-toggle='modal' data-target='#dados_aviso'> Detalhes </a> </td>
												<td> $titulo </td>
												<td> $conteudo </td>
												<td> $data_envio </td>
												<td> $data_alteracao </td>
												<td> <a>Fechar</a> </td>
												<td> <a data-toggle='modal' data-target='#modal_editar_aviso' data-id='$id' href='#'>Editar</a> </td>
												<td> <a onclick='excluir_aviso($id)' href='#'>Apagar</a> </td>
											</tr>";
									}
								?>
							</tbody>
						</table>
						<?php else: ?>
							<h3>Nenhum Aviso :^)</h3>
							<hr>
						<?php endif; ?>
						<hr>
						<p class="lead">Filtros de pesquisa:</p>
						<form class="form-horizontal">
							<fieldset>
								<div class="row">
									<div class="control-group">
										<div class="controls">
											<div class="col-md-3">
												<div class="input-prepend input-group">
													<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" style="width: 200px" name="reportrange" id=”reportrange” class="form-control" value="18/03/2008 – 18/02/2013" />
												</div>
											</div>
											<div class="col-md-3">
												<div class="input-prepend input-group">
													<span class="add-on input-group-addon"><i class="glyphicon glyphicon-search fa fa-search"></i></span><input type="text" style="width: 200px" name="keyword" id=”reportrange” class="form-control" placeholder="Digite a palavra-chave" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
						<hr>
						<?php 
							foreach($avisos as $aviso){
								$data_envio = date("d/m/Y H:i:s", strtotime($aviso['data_envio']));
								$data_alteracao = date("d/m/Y H:i:s", strtotime($aviso['data_alteracao']));
						?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4><?=$aviso['titulo']?></h4>
									</div>
									<div class="panel-body">
										<p class="pull-center"><small><span class="glyphicon glyphicon-time"></span> Enviado em <?=$data_envio?> &nbsp Alterado em <?=$data_alteracao?></small></p>
										<br><br>
										<p><?=$aviso['conteudo']?></p>
										<br>
										<hr>
										<a class="btn btn-default" href="aviso_detalhe.php?AVISO=<?=$aviso['id']?>">Ver mais</a>
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
			include ("templates/modal_dados_aviso.php");
			include ("templates/modal_insert_aviso.php");
			include ("templates/modal_edit_aviso.php");
      include ("templates/footer.html.php");
    ?>
  </body>
</html>
