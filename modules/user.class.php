<?php
	class user{
		public $id;
		public $name;
		public $password;
		public $type;

		function __construct($id, $name, $password, $type){
			$this->id = $id;
			$this->name = $name;
			$this->password = $password;
			$this->type = $type;
		}

		function save(){
			try {
				$query = "INSERT INTO usuario VALUES (null, $this->name,$this->password, $this->type)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function update(){
			try {
				$query = "UPDATE  usuario SET('nome','senha','tipo') VALUES ( $this->name,$this->password, $this->type)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function delete(){
			try {
				$query = "DELETE * FROM usuario WHERE id = $this->id)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function select_all(){
			try {
				$query = "SELECT * FROM usuario";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function find($id){
			try {
				$query = "SELECT * FROM usuario WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
	}
