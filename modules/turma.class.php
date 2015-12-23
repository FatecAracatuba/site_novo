<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	class Turma{
		public $id;
		public $descricao;
		public $semestre;
		public $data_inicio;
		public $data_termino;
		public $curso;

		function __construct($id="", $descricao="", $semestre="", $data_inicio="", $data_termino="", $curso=""){

			$this->id = $id;
			$this->descricao = $descricao;
			$this->semestre = $semestre;
			$this->data_inicio = $data_inicio;
			$this->data_termino = $data_termino;
			$this->curso = $curso;

		}

		function save(){
			try {
				$query = "INSERT INTO turmas(descricao, semestre, data_inicio, data_termino, curso) VALUES ('$this->descricao', '$this->semestre', '$this->data_inicio', '$this->data_termino', '$this->curso')";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function update(){
			try {
				$query = "UPDATE turmas SET descricao = '$this->descricao', semestre = '$this->semestre', data_inicio = '$this->data_inicio', data_termino = '$this->data_termino', curso = $this->curso WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function delete($id){
			try {
				$query = "DELETE FROM turmas WHERE id = ".$id;
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function select_all(){
			try {
				$query = "SELECT * FROM turmas";
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

		function select_by_curso($idcurso){
			try {
				$query = "SELECT * FROM turmas WHERE curso = " . $idcurso;

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

		function find($id){
			try {
				$query = "SELECT * FROM turmas WHERE id = ".$id;
				$result = mysql_query($query);
				while ( $rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data)){
					return $data;
				}
				return false;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

	}

?>
