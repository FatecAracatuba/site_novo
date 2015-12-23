<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL);

	class Curso{
		public $id;
		public $nome;

		function __construct($id="", $nome=""){
			$this->id = $id;
			$this->nome = $nome;
		}

		function save(){
			try {
				$query = "INSERT INTO cursos(nome) VALUES ('$this->nome')";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function update(){
			try {
				$query = "UPDATE cursos SET nome = '$this->nome' WHERE id = $this->id";
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function delete($id){
			try {
				$query = "DELETE FROM cursos WHERE id = ".$id;
				mysql_query($query);
				return true;
			} catch (Exception $e) {
				echo 'Erro: ', $e->getmessage() ,"\n";
				return false;
			}
		}

		function select_all(){
			try{
        $query = "SELECT * FROM cursos";
        $result = mysql_query($query);
        while ( $rs = mysql_fetch_assoc($result)) {
          $data[] = $rs;
        }
        if (isset($data))
          return $data;
				
        return [];
      }catch (Exception $e) {
        echo 'Error: ',  $e->getMessage(), "\n";
        return false;
      }
		}

		function find($id){
				try{
					$query = "SELECT * FROM cursos WHERE id = " . $id;
	        $result = mysql_query($query);
	        while ( $rs = mysql_fetch_assoc($result)) {
	          $data[] = $rs;
	        }
	        if (isset($data)){
	          return $data[0];
					}
	        return false;
	      }catch (Exception $e) {
	        echo 'Error: ',  $e->getMessage(), "\n";
	        return false;
	      }
		}
	}
?>
