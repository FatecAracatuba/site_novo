<?php 
	class Horario{
		public $id;
		public $data_envio;
		public $pdf_horario;
		public $curso;
		public $ativo;
		
		function __construct($id="", $data_envio="", $pdf_horario="", $curso="", $ativo=""){
			$this->id = $id;
			$this->data_envio = $data_envio;
			$this->pdf_horario = $pdf_horario;
			$this->curso = $curso;
			$this->ativo = $ativo;
		}
		
		function horario_upload(){
			if($_FILES){
				if($_FILES['horario_pdf']['name'] != "") {
					$dir = 'Horarios/';
          $archive_name = $_FILES['horario_pdf']['name'];
					$extension = strtolower(end(explode('.', $archive_name)));
					$name = time(). '.' . $extension;
          $tmp_name = $_FILES['horario_pdf']['tmp_name'];
          if(move_uploaded_file($tmp_name, $dir.$name)) {
						return 'Horarios/'.$name;
          }else {
						return false;
          }
				}
			}
		}
		
		function save(){
			try {
				$query = "INSERT INTO horarios (data_envio, horario_pdf, ativo, id_curso) VALUES ('$this->data_envio', '$this->pdf_horario', $this->ativo, $this->curso)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function update(){
			try {
				$query = "UPDATE horarios SET horario_pdf = '$this->pdf_horario', id_curso = $this->curso, ativo = $this->ativo WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function activate($id, $id_curso){
			try {
				$find_row = "SELECT * FROM horarios WHERE id_curso = $id_curso AND ativo = 1";
				$rs_row = mysql_query($find_row);
				
				if(mysql_num_rows($rs_row) < 1){
					$query = "UPDATE horarios SET ativo = 1 WHERE id = $id";
					mysql_query($query);
					return true;
				} else {
					return false;
				}
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function disactivate($id){
			try {
				$query = "UPDATE horarios SET ativo = 0 WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function delete($id){
			try {
				$query = "DELETE FROM horarios WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function select_all(){
			try {
				$query = "SELECT * FROM horarios";
				$result = mysql_query($query);
				while ( $rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data))
					return $data;
				
				return false;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function select_by_curso($id_curso){
			try{
				$query = "SELECT * FROM horarios WHERE id_curso = ".$id_curso;
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
		
		function select_ativo(){
			try {
				$query = "SELECT * FROM horarios WHERE ativo = 1";
				$result = mysql_query($query);
				while ($rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data)){
					return $data[4];
				}
				return [];
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function select_qtde_ativo($id_curso){
			try {
				$query = "SELECT * FROM horarios WHERE id_curso = ".$id_curso." AND ativo = 1";
				$result = mysql_query($query);
				$num_row = mysql_num_rows($result);
				return $num_row;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function select_by_curso_ativo($id_curso){
			try{
				$query = "SELECT * FROM horarios WHERE id_curso = ".$id_curso." AND ativo = 1";
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
				$query = "SELECT * FROM horarios WHERE id = $id";
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