<?php
	/**
	* 
	*/
	class conn
	{
		private $host;
		private $db;
		private $user;
		private $pwd;
		private $sql;

		function connect(){
			$conn = mysql_connect($this->host,$this->user,$this->pwd) or die($this->message(mysql_error()));
			return $conn;
		}

		function selectDB(){
			$database = mysql_select_db($this->db) or die($this->message(mysql_error()));
			if ($database) {
				return true;
			}
			else{
				return false;
			}
		}

		function execQuery(){
			$query = mysql_query($this->sql) or die($this->message(mysql_error()));
			return $query;
		}

		function set($property, $value){
			$this->$property = $value;
		}

		function message($error){
			echo $error;
		}


	}
?>