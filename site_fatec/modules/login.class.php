<?php 

	class login{
		
		private $password;
		public $login;
		
		function __construct($user, $pwd, $msg_error = "Login ou Senha inválido", $redirect = false){
			$this->login = mysql_real_escape_string($user);
			$this->password = mysql_real_escape_string($pwd);
			$this->msg_error = $msg_error;
			$this->redirect = $redirect;
		}
		
		function log_in(){
			try{
				$query = "SELECT nome, senha FROM usuarios WHERE nome = '".$this->login."' AND senha = '".$this->password."'";
				$result = mysql_query($query);
				if(mysql_num_rows($result) > 0){
					if($this->senha != mysql_result($query, 0, $this->senha)){
						return $this->msg_error;
					}else{
						session_start();
						$_SESSION["user"] = $user;
						$_SESSION["password"] = $pwd;
						$redirect = "area_restrita.php";
						if($redirect){
							header("Location:".$redirect);
						}
					}
				} else {
					return $this->msg_error;
					header("Location:index.php");
				}
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function check($redirect = false){ //Verifica se o usuário está logado
			session_start();
			if(isset($_SESSION["user"]) and isset($_SESSION["password"])){
				global $user_login;
				$user_login = $_SESSION["user"];
				return true;
			}else{
				if($redirect){
					header("Location:".$redirect);
				}
				return false;
			}
		}
		
		function logout($redirect = false){ // desloga o usuário
			session_start();
			$_SESSION = array(); 			 
			session_destroy();
			session_regenerate_id();
			$redirect = "index.php";
			if($redirect){
				header("Location:".$redirect);
				exit;
			}
		}
		
	}

?>