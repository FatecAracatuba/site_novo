<?php
	class banner{

		public $id;
		public $description;
		public $image;
		public $active

		function __construct($id, $description, $image,$active){
			$this->id = $id;
			$this->description = $description;
			$this->image = $image;
			$this->active = $active;
		}

		function save(){
			try {
				$query = "INSERT INTO banners VALUES (null, $this->description,$this->image,$this->active) ";
				mysql_query($query);
				return true;	
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;	
			}
		}

		function toggle($description,$status){
			try {
				$query = "UPDATE banners SET ativo = $status WHERE description = $description";
				mysql_query($query);
				return true;	
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;	
			}
		}

		function update($description){
			try {
				$query = "UPDATE banners SET('description'imagem') VALUES($this->description,$this->image) WHERE description = $description";
				mysql_query($query);
				return true;	
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;	
			}
		}

		function delete()
		{
			try {
				$query = "DELETE FROM banners WHERE id = $this->id ";
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
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}
	}
?>