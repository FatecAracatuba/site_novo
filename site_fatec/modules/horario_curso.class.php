<?php 
	class Horario{
		public $id;
		public $data_envio;
		public $pdf_horario;
		public $curso;
		
		function __construct($id="", $data_envio="", $pdf_horario="", $curso=""){
			$this->id = $id;
			$this->data_envio = $data_envio;
			$this->pdf_horario = $pdf_horario;
			$this->curso = $curso;
		}
		
		function horario_upload(){
			if($_FILES){
				if($_FILES['horario_pdf']['name'] != "") {
					$dir = 'Horarios/';
          $name = $_FILES['horario_pdf']['name'];
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
				
				$Pdf_horario = $this->horario_upload();
				$query = "INSERT INTO horarios (data_envio, horario_pdf, id_curso) VALUES ('$this->data_envio', '$Pdf_horario', $this->curso)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function update(){
			try {
				$query = "UPDATE horarios SET horario_pdf = '$this->horario_pdf', ativo = $this->ativo WHERE id = $this->id";
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
				if (isset($data)){
					return $data;
				}
				return [];
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
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