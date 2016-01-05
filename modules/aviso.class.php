<?php 
	class Aviso{
		public $id;
		public $titulo;
		public $conteudo;
		public $data_envio;
		public $data_alteracao;
		public $ativo;
		public $id_usuario;
		
		function __construct($id="", $titulo="", $conteudo="", $data_envio="", $data_alteracao="", $ativo="", $id_usuario=""){
			$this->id = $id;
			$this->titulo = $titulo;
			$this->conteudo = $conteudo;
			$this->data_envio = $data_envio;
			$this->data_alteracao = $data_alteracao;
			$this->ativo = $ativo;
			$this->id_usuario = $id_usuario;
		}
		
		function save(){
			try {
				$query = "INSERT INTO avisos (titulo, conteudo, data_envio, data_alteracao, ativo, id_usuario) VALUES ('$this->titulo', '$this->conteudo', '$this->data_envio', '$this->data_alteracao', '$this->ativo', $this->id_usuario)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function update(){
			try {
				$query = "UPDATE avisos SET titulo = '$this->titulo', conteudo = '$this->conteudo', data_envio = '$this->data_envio', data_alteracao = '$this->data_alteracao' WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function close($id){
			try {
				$query = "UPDATE avisos SET ativo = 0 WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function open($id){
			try {
				$query = "UPDATE avisos SET ativo = 1 WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function delete($id){
			try {
				$query = "DELETE FROM avisos WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function select_all(){
			try {
				$query = "SELECT * FROM avisos";
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
		
		function select_five(){
			try {
				$query = "SELECT * FROM avisos LIMIT 5";
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
				$query = "SELECT * FROM avisos WHERE ativo = 1";
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
				$query = "SELECT * FROM avisos WHERE id = $id";
				$result = mysql_query($query);
				while ( $rs = mysql_fetch_assoc($result)) {
					$data[] = $rs;
				}
				if (isset($data))
					return $data[0];
				
				return false;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		static function find_aviso($id){
			try {
				$query = "SELECT * FROM avisos WHERE id = $id";
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
		
		function details($id){
			try {
				$query = "SELECT * FROM avisos WHERE id = $id";
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
	}
?>