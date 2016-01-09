<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

  class upload {
    public $user;
    public $file;
    public $time;
    public $date;

    function __construct($file=""){
      $this->file = $file;
      // $this->time = $time;
      // $this->date = $date;
    }
		
		function user_photo_upload(){
			if($_FILES){
				if($_FILES['foto_usuario']['name'] != "") {
					$dir = 'photos_users/';
          $archive_name = $_FILES['foto_usuario']['name'];
					$tmp_name = $_FILES['foto_usuario']['tmp_name'];
					$extension = strtolower(end(explode('.', $archive_name)));
					$name = sha1(time()). '.' . $extension;
          if(move_uploaded_file($tmp_name, $dir.$name)) {
						return 'photos_users/'.$name;
          }else {
						return false;
          }
				}
			}
		}

		function aluno_pdf(){
			if($_FILES){
				if($_FILES['tg_pdf']['name'] != "") {
					$dir = 'TGs/';
          $archive_name = $_FILES['tg_pdf']['name'];
          $tmp_name = $_FILES['tg_pdf']['tmp_name'];
					$extension = strtolower(end(explode('.', $archive_name)));
					$name = sha1(time()). '.' . $extension;
          if(move_uploaded_file($tmp_name, $dir.$name)) {
						return 'TGs/'.$name;
          }else {
						return false;
          }
				}
			}
		}
		
		function horario_upload(){
			if($_FILES){
				if($_FILES['horario_pdf']['name'] != "") {
					$dir = 'Horarios/';
          $archive_name = $_FILES['horario_pdf']['name'];
					$extension = strtolower(end(explode('.', $archive_name)));
					$name = sha1(time()). '.' . $extension;
          $tmp_name = $_FILES['horario_pdf']['tmp_name'];
          if(move_uploaded_file($tmp_name, $dir.$name)) {
						return 'Horarios/'.$name;
          }else {
						return false;
          }
				}
			}
		}
		
		function banner_upload(){
			if($_FILES){
				if($_FILES['banner_img']['name'] != "") {
					$dir = 'Banners/';
          $archive_name = $_FILES['banner_img']['name'];
					$extension = strtolower(end(explode('.', $archive_name)));
					$name = sha1(time()). '.' . $extension;
          $tmp_name = $_FILES['banner_img']['tmp_name'];
          if(move_uploaded_file($tmp_name, $dir.$name)) {
						return 'Banners/'.$name;
          }else {
						return false;
          }
				}
			}
		}
		
		function banner_upload_2($banner=""){
			//$foto = $_FILES['foto'];
		
			if(!empty($banner['banner_img']['name'])){
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
  }
?>
