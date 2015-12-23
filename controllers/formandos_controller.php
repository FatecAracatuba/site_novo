<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL); 
	
	include ("../index_modules.php");
	include ("../modules/turma.class.php");
	include ("../modules/upload_pdf.class.php");
	include ("../modules/aluno.class.php");
	
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
		$Descricao = "Turma do ".$Semestre."º Semestre do curso de ".$Curso." de ".date_format($inicio, "Y");
					
		$turma = new turma($Descricao, $Semestre, $Data_inicio, $Data_termino, $Curso);
		$turma->save();
		header("Location:../formandos.php");
	}
				
	if(isset($_POST['editar_turma'])){
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
		$Descricao = "Turma do ".$Semestre."º Semestre do curso de ".$Curso." de ".date_format($inicio, "Y");
					
		$turma = new turma($Descricao, $Semestre, $Data_inicio, $Data_termino, $Curso);
		$turma->edit();
		//header("Location: ../formandos.php");
	}
			
	if(isset($_POST['inserir_aluno'])){
		$tg_pdf = $_FILES['tg_pdf']['name'];
		$up = new upload($tg_pdf);
		$Nome = $_POST['nome'];
		$Arquivo = $up->visitor_pdf();
		$Data_inscricao = date("Y/m/d", time());
		$Turma = $_POST['turma'];
					
		$aluno = new aluno($Nome, $Arquivo, $Data_inscricao, $Turma);
		$aluno->find_turma();
		$aluno->save();
		header("Location: ../formandos.php");
	}
	
	if(isset($_GET['selecionar_aluno'])){
		$id_aluno = $_GET['selecionar_aluno'];
		$aluno = new aluno('', '', '', '');
		$busca_aluno = $aluno->find($id_aluno);
		$rs_busca_aluno = mysql_fetch_array($busca_aluno);
		
		echo json_encode($rs_busca_aluno);
	}
	
	if(isset($_POST['editar_aluno'])){
		$tg_pdf = $_FILES['tg_pdf']['name'];
		$up = new upload($tg_pdf);
		$Nome = $_POST['nome'];
		if(!empty($_POST['tg_pdf'])){
			$Arquivo = $up->visitor_pdf();
		} else {
			$Arquivo = $_POST['antigo_tg_pdf'];
		}
		$Turma = $_POST['turma'];
					
		$aluno = new aluno($Nome, $Arquivo, '', $Turma);
		$aluno->find_turma();
		$aluno->update();
		//header("Location: ../formandos.php");
	}
				
	if(isset($_GET['excluir_aluno'])){
		$aluno = new aluno('', '', '', '');
		$aluno->delete($_GET['excluir_aluno']);
		header("Location: ../formandos.php");
	}
?>