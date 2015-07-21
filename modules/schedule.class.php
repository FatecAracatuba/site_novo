<?php
	class schedule{

		public $id;
		public $course;
		public $semester;
		public $image;

		function __construct($id, $course, $semester, $image){
			$this->id =$id;
			$this->course =$course;
			$this->semester =$semester;
			$this->image =$image;
		}

		function save(){
			try {
				$query = "INSERT INTO horarios VALUES (null, $this->course, $this->semester,$this->image) ";
				mysql_query($query);
				return true;	
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;	
			}
		}

		function update($course, $semester){
			try {
				$query = "UPDATE horarios SET('imagem') VALUES($image) WHERE curso = $course AND semestre = $semester";
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
				$query = "DELETE FROM horarios WHERE id = $this->id ";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function select_all(){
			try {
				$query = "SELECT * FROM horarios";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function find($id){
			try {
				$query = "SELECT * FROM horarios WHERE id = $id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}


	}
?>