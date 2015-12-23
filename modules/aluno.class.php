<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	class Aluno{
		public $id;
		public $nome;
		public $arquivo_pdf;
		public $data_inscricao;
		public $turma;

		function __construct($id="", $nome="", $arquivo_pdf="", $data_inscricao="", $turma=""){
			$this->id = $id;
			$this->nome = $nome;
			$this->arquivo_pdf = $arquivo_pdf;
			$this->data_inscricao = $data_inscricao;
			$this->turma = $turma;
		}

		function save(){
			try {
				$query = "INSERT INTO alunos (nome, tg_pdf, data_inscricao, id_turma) VALUES ('$this->nome', '$this->arquivo_pdf','$this->data_inscricao', $this->turma)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function update(){
			try {
				$query = "UPDATE alunos SET nome='$this->nome', tg_pdf='$this->arquivo_pdf', id_turma=$this->turma WHERE id = " . $this->id;
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function delete($id){
			try {
				$query = "DELETE FROM alunos WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function select_all(){
			try {
				$query = "SELECT * FROM alunos";
				$result = mysql_query($query);
				while ( $rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data))
					return $data;

				return [];
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function select_by_turma($id_turma){
			try{
				$query = "SELECT * FROM alunos WHERE id_turma = ".$id_turma;
				$result = mysql_query($query);
				while ( $rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data))
					return $data;

				return [];
			}catch (Exception $e) {
				echo 'Error: ',  $e->getMessage(), "\n";
				return false;
			}
		}

		function find($id){
			try {
				$query = "SELECT * FROM alunos WHERE id = $id";
				$result = mysql_query($query);
				while ( $rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data)){
					return $data[0];
				}
				return false;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

	}

?>
