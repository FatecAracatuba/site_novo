<?php
ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
include ("index_modules.php");

if(isset($_POST['inserir_curso'])){
	$Nome_curso = $_POST['nome'];
	$curso = new Curso($Nome_curso);
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
  header("Location: formandos_gerencial.php#turmas");
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
  $up = new upload();
  $nome = $_POST['nome'];
  $id = $_POST['id_aluno'];
	$turma = $_POST['turma'];

  if(!empty($_POST['tg_pdf'])){
    $arquivo = $up->aluno_pdf();
  } else {
    $arquivo = $_POST['antigo_tg_pdf'];
  }
	
	$aluno = new Aluno($id, $nome, $arquivo, '', $turma);
  $aluno->update();
  header("Location: formandos_painel.php#aluno");
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
		<script type="text/javascript" src="js/formandos.js"/>
		<script type="text/javascript">
			/*function excluir_curso(id_curso){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele curso?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_gerencial.php", { operacaoAjax: "apagar_curso", idcurso: id_curso }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }

      function editar_curso($id_curso){

      }

      $(function(){
        $('#modal_editar_curso').on('show.bs.modal', function (event) {
          $('#modal_editar_curso').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_curso = button.data('id')
          var modal = $(this)


          $.post( "formandos_gerencial.php", { operacaoAjax: "buscar_curso", idcurso: id_curso }, function( data ) {
            console.log(data);
						modal.find('#input_id_curso').val(data.id);
            modal.find('#input_nome_curso').val(data.nome);
          }, "json");
        });
      });
			
			/*$(document).on( "click", '.btn_editar_curso',function() {

				var id = $(this).data('id');
        var nome_curso = $(this).data('nome_curso');

        $("#input_id").val(id);
        $("#input_nome_curso").val(nome_curso);
				
				$('#modal_editar_curso').modal('show');

			});*/
			
     /* function excluir_turma(id_turma){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquela turma?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_gerencial.php", { operacaoAjax: "apagar_turma", idturma: id_turma }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }

      function editar_turma($id_turma){

      }

      $(function(){
        $('#modal_editar_turma').on('show.bs.modal', function (event) {
          $('#modal_editar_turma').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_turma = button.data('id')
          var modal = $(this)


          $.post( "formandos_gerencial.php", { operacaoAjax: "buscar_turma", idturma: id_turma }, function( data ) {
            console.log(data);
						modal.find('#input_id_turma').val(data.id);
            modal.find('#input_descricao').val(data.descricao);
						modal.find('#input_semestre').val(data.semestre);
            modal.find('#input_data_inicio').val(data.data_inicio);
						modal.find('#input_data_termino').val(data.data_termino);
						modal.find('#input_curso').val(data.id_curso);
          }, "json");
        });
      });
			
			/*$(document).on( "click", '.btn_editar_turma',function() {

				var id = $(this).data('id');
				var descricao = $(this).data('descricao_antiga');
        var semestre = $(this).data('semestre');
        var data_inicio = $(this).data('data_inicio');
				var data_termino = $(this).data('data_termino');
				var curso = $(this).data('curso');

        $("#input_id").val(id);
				$("#input_descricao").val(descricao);
        $("#input_semestre").val(semestre);
        $("#input_data_inicio").val(data_inicio);
				$("#input_data_termino").val(data_termino);
				$("#input_curso").val(curso);

			});*/
			
			/*function excluir_aluno(id_aluno){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele aluno?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_gerencial.php", { operacaoAjax: "apagar_aluno", idaluno: id_aluno }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }

      function editar_aluno($id_aluno){

      }

      $(function(){
        $('#modal_editar_aluno').on('show.bs.modal', function (event) {
          $('#modal_editar_aluno').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_aluno = button.data('id')
          var modal = $(this)


          $.post( "formandos_gerencial.php", { operacaoAjax: "buscar_aluno", idaluno: id_aluno }, function( data ) {
            console.log(data);
            modal.find('#input_nome').val(data.nome);
            modal.find('#input_antigo_tg_pdf').val(data.tg_pdf);
            modal.find('#input_turma').val(data.id_turma);
            modal.find('#input_id').val(data.id);
          }, "json");
        });
      });
			
			/*$(document).on("click", ".btn_editar_aluno", function(){
				var id = $(this).data('id');
        var nome = $(this).data('nome');
        var tg_pdf = $(this).data('tg_pdf')[0].files[0];
				var turma = $(this).data('turma');

        $('.modal-body #input_id').val(id);
        $('.modal-body #input_nome').val(nome);
        $('.modal-body #input_tg_pdf').val(tg_pdf);
				$('.modal-body #input_turma').val(turma);

				$('#modal_editar_aluno').modal('show');
			});*/
		</script>
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
											<td><?=$turma['curso']?></td>
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
											<td><?=$aluno['tg_pdf']?></td>
											<td><?=$aluno['id_turma']?></td>
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
