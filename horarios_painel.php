<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
include ("index_modules.php");

if(isset($_POST['inserir_horario'])){
	
	$data_envio = date('d/m/Y H:i:s');
	$curso = $_POST['curso'];
	
	$arquivo = $_FILES['horario_pdf']['name'];
	$up = new upload($arquivo);
  $arquivo = $up->horario_upload();
	
	$semestre = $_POST['semestre'];
	$ano = $_POST['ano'];
	
	$horario = new Horario('', $data_envio, $arquivo, $semestre, $ano, $curso, 0);
	$horario->save();
	
	header("Location: horarios_painel.php");
}

if(isset($_POST['editar_horario'])){
	$id = $_POST['id_horario'];
	
	if(!empty($_FILES['horario_pdf']['name'])){
		$arquivo = $_FILES['horario_pdf']['name'];
    $up = new upload($arquivo);
    $arquivo = $up->horario_upload();
		$data_envio = date('d/m/Y H:i:s');
  } else {
		$arquivo = $_POST['antigo_horario'];
		$data_envio = $_POST['antiga_data'];
  }
	$semestre = $_POST['semestre'];
	$ano = $_POST['ano'];
	$curso = $_POST['curso'];
	
	$horario = new Horario($id, $data_envio, $arquivo, $semestre, $ano, $curso, 0);
	$horario->update();
	
	if($horario == false){
		?>
		<script>
			alert("Não pode ativar mais de um horário do mesmo curso!");
		</script>
		<?php
	}
	
	header("Location: horarios_painel.php");
}

if(!empty($_POST['operacaoAjax'])){
	
	if($_POST['operacaoAjax'] == 'ativar_horario'){
    $banner = new Horario();
    $banner->activate($_POST['idhorario'], $_POST['idcurso']);
    exit;
  }
	
	if($_POST['operacaoAjax'] == 'desativar_horario'){
    $banner = new Horario();
    $banner->disactivate($_POST['idhorario']);
    exit;
  }
	
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
		<script type="text/javascript" src="js/horario.js"></script>
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
					<a href="#horarios_recentes" data-toggle="tab">Horários Recentes</a>
        </li>
        <li role="presentation">
					<a href="#horarios" data-toggle="tab">Horários</a>
        </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in" id="horarios_recentes">
					<hr>	
						<?php 				 
							panel_cursos_ativo();
						?>
					<hr>
				<?php 
						
				?>
				</div>
				<div class="tab-pane fade in" id="horarios">
					<hr>
						<?php 				 
							panel_cursos();
						?>
					<hr>
				</div>
			</div>
		</div>
      <?php 
			// Início Horários Ativos
			
			function panel_cursos_ativo(){
					
						$curso = new Curso();
						$cursos = $curso->select_all();
						
						foreach($cursos as $curso){
							
					?>
						
								<div class="panel-group col-md-12" id="accordion_ativo_<?=$curso['id']?>" role="tablist" aria-multiselectable="true">
                    <br><br>
                    <div class="panel panel-default accor">
                      <div class="panel-heading" role="tab" id="curso_ativo_<?=$curso['id']?>">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion_ativo_<?=$curso['id']?>" href="#collapseCursoAtivo<?=$curso['id']?>" aria-controls="collapseCursoAtivo<?=$curso['id']?>">Horários do Curso <?=$curso['nome']?></a>
                        </h4>
                      </div>
                      <div id="collapseCursoAtivo<?=$curso['id']?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="curso_ativo_<?=$curso['id']?>">
                        <div class="panel-body">
                          <?php lista_horarios_curso_ativo($curso['id']); ?>
                        </div>
                      </div>
                    </div>
                </div>
					<?php 
						}
						
				}
				
				function lista_horarios_curso_ativo($idcurso){
					$horario = new Horario();
					$horarios = $horario->select_by_curso_ativo($idcurso);
					
					?>
					<table class="table table-default table-responsive col-sm-12">
									<thead>
										<th>Horário</th>
										<th>&nbsp;</th>
									</thead>
									<tbody>
									<?php 
										foreach($horarios as $horario){
											$data_envio = date("d/m/Y H:i:s", strtotime($horario['data_envio']));
									?>
										<tr>
											<td><a href="<?=$horario['horario_pdf']?>" target="_blank">Horário enviado em <?=$data_envio?> do <?=$horario['semestre']?>º Semestre de <?=$horario['ano']?> </a></td>
											<?php comandos_horarios_cursos($horario['id'], $horario['ativo'], $horario['id_curso']); ?>
											</tr>
									<?php 
										}
									?>
									</tbody>
								</table>
					<?php
				}
			
			// Fim Horários Ativos
			
				function panel_cursos(){
					
						$curso = new Curso();
						$cursos = $curso->select_all();
						
						foreach($cursos as $curso){
							
					?>
						
								<div class="panel-group col-md-12" id="accordion_<?=$curso['id']?>" role="tablist" aria-multiselectable="true">
                    <br><br>
                    <div class="panel panel-default accor">
                      <div class="panel-heading" role="tab" id="curso_<?=$curso['id']?>">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion_<?=$curso['id']?>" href="#collapseCurso<?=$curso['id']?>" aria-controls="collapseCurso<?=$curso['id']?>">Horários do Curso <?=$curso['nome']?></a>
                        </h4>
                      </div>
                      <div id="collapseCurso<?=$curso['id']?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="curso_<?=$curso['id']?>">
                        <div class="panel-body">
                          <?php lista_horarios_curso($curso['id']); ?>
                        </div>
                      </div>
                    </div>
                </div>
					<?php 
						}
						
				}
				
				function lista_horarios_curso($idcurso){
					$horario = new Horario();
					$horarios = $horario->select_by_curso($idcurso);
					
					?>
					<table class="table table-default table-responsive col-sm-12">
									<thead>
										<th>Horário</th>
										<th>&nbsp;</th>
									</thead>
									<tbody>
									<?php 
										foreach($horarios as $horario){
											$data_envio = date("d/m/Y H:i:s", strtotime($horario['data_envio']));
									?>
										<tr>
											<td><a href="<?=$horario['horario_pdf']?>" target="_blank">Horário enviado em <?=$data_envio?> do <?=$horario['semestre']?>º Semestre de <?=$horario['ano']?></a></td>
											<?php comandos_horarios_cursos($horario['id'], $horario['ativo'], $horario['id_curso']); ?>
											</tr>
									<?php 
										}
									?>
									</tbody>
								</table>
					<?php
				}
				
				function comandos_horarios_cursos ($id_horario, $ativo, $id_curso){
					
					$horario_ativo = new Horario();
					$horarios_ativos = $horario_ativo->select_qtde_ativo($id_curso);
					if($ativo < 1){
						if($horarios_ativos < 1){
							?>
							<td><a onclick="ativar_horario(<?=$id_horario?>, <?=$id_curso?>)" href="#" id="btn_ativar_horario"><i class="glyphicon glyphicon-edit"></i> Ativar</a></td>
							<?php
						}
						?>
						<td><a data-toggle="modal" data-target="#modal_editar_horario" data-id="<?=$id_horario?>" href="#" id="btn_editar_horario"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
						<td><a onclick="excluir_horario(<?=$id_horario?>)" href="#" id="btn_excluir_horario"><i class="glyphicon glyphicon-remove"></i> Apagar</a></td>			
						<?php 
					}else{
						?>
						<td><a onclick="desativar_horario(<?=$id_horario?>, <?=$id_curso?>)" href="#" id="btn_ativar_horario"><i class="glyphicon glyphicon-edit"></i> Desativar</a></td>
						<?php
					}
					
				}
			
        include ("templates/footer.html.php");
				include ("templates/modal_insert_horario.php");
				include ("templates/modal_edit_horario.php");
      ?>
  </body>
</html>