<?php 
	class Banner{
		public $id;
		public $data_envio;
		public $banner;
		public $ativo;
		
		function __construct($id="", $data_envio="", $banner="", $ativo=""){
			$this->id = $id;
			$this->data_envio = $data_envio;
			$this->banner = $banner;
			$this->ativo = $ativo;
		}
		
		function banner_upload($banner=""){
			//$foto = $_FILES['foto'];
		
			if(!empty($banner['name'])){
				$error = array();

				
				$largura = 2000;
				$altura = 140;
				$tamanho = 1000000;
				
				if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $banner["type"])){
					$error[1] = "Isso não é uma imagem.";
				}
				
				$dimensoes = getimagesize($banner["tmp_name"]);
	
				if($dimensoes[0] > $largura) {
					$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
				}
 
				if($dimensoes[1] > $altura) {
					$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
				}
		
				if($banner["size"] > $tamanho) {
					$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
				}

				if(count($error) == 0){
					preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $banner["name"], $ext);
					$nome_imagem = sha1(uniqid(time())) . "." . $ext[1];
					$caminho_imagem = "Banners/" . $nome_imagem;
					move_uploaded_file($banner["tmp_name"], $caminho_imagem);
					
				}
				
				return $caminho_imagem;
			}
			
		}
		
		function save(){
			try {
				//$banner_upload = $this->banner_upload();
				$query = "INSERT INTO banners (data_envio, banner_img, ativo) VALUES ('$this->data_envio', '$this->banner', $this->ativo)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function update(){
			try {
				$query = "UPDATE banners SET banner_img = '$this->banner', ativo = $this->ativo WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function activate($id){
			try {
				$find_row = "SELECT * FROM banners WHERE ativo = 1";
				$rs_row = mysql_query($find_row);
				
				if(mysql_num_rows($rs_row) < 1){
					$query = "UPDATE banners SET ativo = 1 WHERE id = $id";
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
				$query = "UPDATE banners SET ativo = 0 WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function delete($id){
			try {
				$query = "DELETE FROM banners WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function select_all(){
			try {
				$query = "SELECT * FROM banners";
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
		
		function select_ativo(){
			try {
				$query = "SELECT * FROM banners WHERE ativo = 1";
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
		
		function select_qtde_ativo(){
			try {
				$query = "SELECT * FROM banners WHERE ativo = 1";
				$result = mysql_query($query);
				$num_row = mysql_num_rows($result);
				return $num_row;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function find($id){
			try {
				$query = "SELECT * FROM banners WHERE id = $id";
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