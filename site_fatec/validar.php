<?php

	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL); 

	include 'index_modules.php';
	include 'modules/login.class.php';

	if(isset($_POST['logar'])){
		$User = htmlspecialchars($_POST['user']);
		$Pwd = htmlspecialchars($_POST['pwd']);
		
		$login = new login($User, $Pwd, '', '');
		$login->log_in();
		
	}

?>