<?php
	
	class access{

		public $id;
		public $date;
		public $User_id;

		 function __construct($id, $date, $user_id)
		{
			$this->id = $id;
			$this->date = $date;
			$this->user_id = $user_id;
			
		}

		function save(){
			try {
				$query = "INSERT INTO acesso VALUES (null, $this->date,$this->user_id)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function update(){
			try {
				$query = "UPDATE  acesso SET('nome','senha','tipo') VALUES ( $this->date,$this->user_id)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function delete(){
			try {
				$query = "DELETE * FROM acesso WHERE id = $this->id)";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function select_all(){
			try {
				$query = "SELECT * FROM acesso";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function find($id){
			try {
				$query = "SELECT * FROM acesso WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


		function find_by_user($user){
			try {
				$query = "SELECT * FROM acesso WHERE idUsuario = $user_id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
	}