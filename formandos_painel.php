<?php
ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
	include "index_modules.php"; 

if(isset($_POST['inserir_curso'])){
	$Nome_curso = $_POST['nome'];
	$curso = new Curso('', $Nome_curso);
	$curso->save();
	header("Location:formandos_painel.php#cursos");
}

if(isset($_POST['editar_curso'])){
	$Id_curso = $_POST['id_curso'];
	$Nome_curso = $_POST['nome_curso'];
	$curso = new Curso($Id_curso, $Nome_curso);
	$curso->update();
	header("Location:formandos_painel.php#cursos");
}

if(isset($_POST['inserir_turma'])){
  $Semestre = $_POST['semestre'];
  if($_POST['semestre'] == "1º Semestre"){
    $Semestre = 1;
  } else if($_POST['semestre'] == "2º Semestre") {
    $Semestre = 2;
  }
  $inicio = date_create($_POST['data_inicio']);
  $termino = date_create($_POST['data_termino']);
  $Data_inicio = date_format($inicio, "Y/m/d");
  $Data_termino = date_format($termino, "Y/m/d");
  $Curso = $_POST['curso'];

  $nome_curso = new Curso();
  $nome_curso = $nome_curso->find($Curso);
  $nome_curso = $nome_curso['nome'];

  $Descricao = "Turma do ".$Semestre."º Semestre do curso de ".$nome_curso." de ".date_format($inicio, "Y");

  $turma = new Turma($Descricao, $Semestre, $Data_inicio, $Data_termino, $Curso);
  $turma->save();
  header("Location:formandos_painel.php#turmas");
}

if(isset($_POST['editar_turma'])){
	$Id = $_POST['id_turma'];
  $Semestre = $_POST['semestre'];
  if($_POST['semestre'] == "1º Semestre"){
    $Semestre = 1;
  } else if($_POST['semestre'] == "2º Semestre") {
    $Semestre = 2;
  }
  $inicio = date_create($_POST['data_inicio']);
  $termino = date_create($_POST['data_termino']);
  $Data_inicio = date_format($inicio, "Y/m/d");
  $Data_termino = date_format($termino, "Y/m/d");
  $Curso = $_POST['curso'];

  $nome_curso = new Curso();
  $nome_curso = $nome_curso->find($Curso);
  $nome_curso = $nome_curso['nome'];

  $Descricao = "Turma do ".$Semestre."º Semestre do curso de ".$nome_curso." de ".date_format($inicio, "Y");

  $turma = new Turma($Id, $Descricao, $Semestre, $Data_inicio, $Data_termino, $Curso);
  $turma->update();
  header("Location: formandos_painel.php#turmas");
}

if(isset($_POST['inserir_aluno'])){
  $tg_pdf = $_FILES['tg_pdf']['name'];
  $up = new upload($tg_pdf);
  $nome = $_POST['nome'];
  $arquivo = $up->aluno_pdf();
  $data_inscricao = date("Y/m/d", time());
  $turma = $_POST['turma'];

  $aluno = new Aluno('', $nome, $arquivo, $data_inscricao, $turma);
  $aluno->save();
  header("Location: formandos_painel.php#aluno");
}

if(isset($_POST['editar_aluno'])){
  $nome = $_POST['nome'];
  $id = $_POST['id_aluno'];
	$turma = $_POST['turma'];

  if(!empty($_FILES['tg_pdf']['name'])){
    $tg_pdf = $_FILES['tg_pdf']['name'];
    $up = new upload($tg_pdf);
    $arquivo = $up->aluno_pdf();
  } else {
    $arquivo = $_POST['antigo_tg_pdf'];
  }
	
	$aluno = new Aluno($id, $nome, $arquivo, '', $turma);
  $aluno->update();
  header("Location: formandos_painel.php#alunos");
}

if(!empty($_POST['operacaoAjax'])){

  if($_POST['operacaoAjax'] == 'apagar_curso'){
    $curso = new Curso();
    $curso->delete($_POST['idcurso']);
    exit;
  }
  if($_POST['operacaoAjax'] == 'buscar_curso'){
    header('Content-Type: application/json');
    $curso = new Curso();
    $curso = $curso->find($_POST['idcurso']);

    echo json_encode($curso);

    exit;
  }
	
	if($_POST['operacaoAjax'] == 'apagar_turma'){
    $turma = new Turma();
    $turma->delete($_POST['idturma']);
    exit;
  }
  if($_POST['operacaoAjax'] == 'buscar_turma'){
    header('Content-Type: application/json');
    $turma = new Turma();
    $turma = $turma->find($_POST['idturma']);
    echo json_encode($turma);

    exit;
  }
	
	if($_POST['operacaoAjax'] == 'apagar_aluno'){
    $aluno = new Aluno();
    $aluno->delete($_POST['idaluno']);
    exit;
  }
  if($_POST['operacaoAjax'] == 'buscar_aluno'){
    header('Content-Type: application/json');
    $aluno = new Aluno();
    $aluno = $aluno->find($_POST['idaluno']);

    echo json_encode($aluno);

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
		<script type="text/javascript" src="js/formandos.js"></script>
		<div class="container main">
			<hr>
			<div class="row">
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_curso">Cadastrar Cursos</button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_turma">Cadastrar Turmas</button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_aluno">Cadastrar Alunos</button>
					</div>
				</div>
			</div>
			<hr>
			<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#cursos" data-toggle="tab">Cursos</a>
          </li>
          <li role="presentation">
            <a href="#turmas" data-toggle="tab">Turmas</a>
          </li>
          <li role="presentation">
            <a href="#alunos" data-toggle="tab">Alunos</a>
					</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="cursos">
					<hr>
					<?php
							$curso = new Curso();
							$cursos = $curso->select_all();
					?>
								<table class="table table-default table-responsive col-sm-12">
									<thead>
										<th>Curso</th>
										<th>&nbsp;</th>
									</thead>
									<tbody>
									<?php 
										foreach($cursos as $curso){
									?>
										<tr>
											<td><?=$curso['nome']?></td>
											<td><a data-toggle="modal" data-target="#modal_editar_curso" data-id="<?=$curso['id']?>" href="#" id="btn_editar_curso"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
											<td><a onclick="excluir_curso(<?=$curso['id']?>)" href="#" id="btn_excluir_curso"><i class="glyphicon glyphicon-remove"></i> Excluir</a></td>
										</tr>
									<?php 
										}
									?>
									</tbody>
								</table>
				</div>
				<div class="tab-pane fade in" id="turmas">
					<hr>
					<?php
									$turma = new Turma();
									$turmas = $turma->select_all();
								?>
								<table class="table table-default table-responsive col-sm-12">
									<thead>
										<th>Turma</th>
										<th>Curso</th>
										<th>&nbsp;</th>
									</thead>
									<tbody>
									<?php 
										foreach($turmas as $turma){
									?>
										<tr>
											<td><?=$turma['descricao']?></td>
											<td><?=mostrar_curso_da_turma($turma['curso'])?></td>
											<td>&nbsp;</td>
											<td><a data-toggle="modal" data-target="#modal_editar_turma" data-id="<?=$turma['id']?>" href="#" id="btn_editar_turma"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
											<td><a onclick="excluir_turma(<?=$turma['id']?>)" href="#" id="btn_excluir_turma"><i class="glyphicon glyphicon-remove"></i> Excluir</a></td>
										</tr>
									<?php 
										}
									?>
									</tbody>
								</table>
				</div>
				<div class="tab-pane fade in" id="alunos">
				<hr>
								<?php
									$aluno = new Aluno();
									$alunos = $aluno->select_all();
								?>
								<table class="table table-default table-responsive col-sm-12">
									<thead>
										<th>Aluno</th>
										<th>Trabalho de Graduação</th>
										<th>Turma</th>
										<th>&nbsp;</th>
									</thead>
									<tbody>
									<?php 
										foreach($alunos as $aluno){
									?>
										<tr>
											<td><?=$aluno['nome']?></td>
											<td><a href="<?=$aluno['tg_pdf']?>" target="_blank">Link</a></td>
											<td><?=mostrar_turma_do_aluno($aluno['id_turma'])?></td>
											<td><a data-toggle="modal" data-target="#modal_editar_aluno" data-id="<?=$aluno['id']?>" href="#" id="btn_editar_aluno"><i class="glyphicon glyphicon-edit"></i> Editar</a></td>
											<td><a onclick="excluir_aluno(<?=$aluno['id']?>)" href="#" id="btn_excluir_aluno"><i class="glyphicon glyphicon-remove"></i> Excluir</a></td>
										</tr>
									<?php 
										}
									?>
									</tbody>
								</table>
				</div>
			</div>
		</div>
          <?php
					
					function mostrar_curso_da_turma($id_curso){
						$Nome_curso = new Curso();
						$nome_curso = $Nome_curso->find($id_curso);
						foreach($nome_curso as $Nome_curso){
							echo $Nome_curso['nome'];
						}
					}
					
					function mostrar_turma_do_aluno($id_turma){
						$Nome_turma = new Turma();
						$nome_turma = $Nome_turma->find($id_turma);
						foreach($nome_turma as $Nome_turma){
							echo $Nome_turma['descricao'];
						}
					}

				//include ("templates/loading.html.php");
        include ("templates/footer.html.php");
				include ("templates/modal_insert_aluno.php");
        include ("templates/modal_insert_turma.php");
				include ("templates/modal_insert_curso.php");
				include ("templates/modal_edit_aluno.php");
        include ("templates/modal_edit_turma.php");
				include ("templates/modal_edit_curso.php");
      ?>
  </body>
</html>
