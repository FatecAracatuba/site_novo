<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	class User{
		public $id;
		public $name;
		public $email;
		public $username;
		public $password;
		public $photo;
		public $type;
		public $phone;

		function __construct($id="", $name="", $email="", $username="", $password="", $photo="", $type="", $phone=""){
			$this->id = $id;
			$this->name = $name;
			$this->email = $email;
			$this->username = $username;
			$this->password = $password;
			$this->photo = $photo;
			$this->type = $type;
			$this->phone = $phone;
		}

		function save(){
			try {
				$query = "INSERT INTO usuarios (nome, email, username, senha, foto, tipo, telefone) VALUES ('$this->name', '$this->email', '$this->username', '$this->password', '$this->photo', '$this->type', '$this->phone')";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function update(){
			try {
				$query = "UPDATE  usuarios SET nome = '$this->name' , email = '$this->email', username = '$this->username', foto = '$this->photo', tipo = '$this->type', telefone = '$this->phone' WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
		
		function update_password(){
			try {
				$query = "UPDATE usuarios SET senha = '$this->password' WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function delete($id){
			try {
				$query = "DELETE FROM usuarios WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function select_all(){
			try {
				$query = "SELECT * FROM usuarios";
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
		
		function select_find($id){
			try {
				$query = "SELECT * FROM usuarios WHERE id = $id";
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
		
		static function find_user($id){
			try {
				$query = "SELECT * FROM usuarios WHERE id = $id";
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

		function find($id){
			try {
				$query = "SELECT * FROM usuarios WHERE id = $id";
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
	}
