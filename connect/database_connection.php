<?php
	include ('conn.php');

	$connect = new conn();

	$connect->set('db','fatec-aracatuba');
	$connect->set('host','localhost');
	$connect->set('user','root');
	$connect->set('pwd','');

	$connect->connect();
	$connect->selectDB();

?>