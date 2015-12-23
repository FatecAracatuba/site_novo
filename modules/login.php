<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	if(isset($_POST['logar'])){
	$User = $_POST['user'];
	$Pwd = $_POST['pwd'];
	$login = new Login($User, $Pwd);
	$Login = $login->logar();
	
	foreach ($Login as $login){
		session_start();
		unset($_SESSION['logged']);
		if(isset($User) && isset($Pwd)){
			if($User == $login['username']){
				if($Pwd == $login['senha']){
					$_SESSION['id'] = $login['id'];
					$_SESSION['user'] = $login['username'];
					$_SESSION['tipo'] = $login['tipo'];
					$_SESSION['logged'] = true;
					header("Location: /site_novo/restritos.php");
				}else{
					header('Location: ../');
				}
			}else{
				header('Location: ../');
			}
		}else {
			header('Location: ../');
		}
	
	}
	
	}
?>
