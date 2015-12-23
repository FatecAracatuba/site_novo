<?php
  header("Content-Type: application/json", true);

  if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'))) {
    return false;
  }

  include "../../conf.php";
  include "../connection.php";
  include "../user.class.php";

  if(isset($_GET['id'])){
    $user = User::find_user($_GET['id']);
    if($user){
      //$json['day'] = date("d/m/Y", strtotime($mail[0]['created_at']));
      //$json['hour'] = date("H:i:s", strtotime($mail[0]['created_at']));
			$json['foto'] = $user[0]['foto'];
      $json['username'] = $user[0]['username'];
			$json['tipo'] = $user[0]['tipo'];
			$json['nome'] = $user[0]['nome'];
			$json['email'] = $user[0]['email'];
			$json['senha'] = $user[0]['senha'];
			$json['telefone'] = $user[0]['telefone'];

    }else{
      $json['error'] = "Usuário não encontrado.";
    }
  }else{
    $json['error'] = "'id' não foi passado como parametro.";
  }
  echo json_encode($json);
?>
