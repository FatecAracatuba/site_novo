<?php
  header("Content-Type: application/json", true);

  if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'))) {
    return false;
  }

  include "../../conf.php";
  include "../connection.php";
  include "../aviso.class.php";

  if(isset($_GET['id'])){
    $aviso = Aviso::find_aviso($_GET['id']);
    if($aviso){
      //$json['day'] = date("d/m/Y", strtotime($aviso[0]['created_at']));
      //$json['hour'] = date("H:i:s", strtotime($aviso[0]['created_at']));
			$json['id'] = $aviso[0]['id'];
			$json['titulo'] = $aviso[0]['titulo'];
			$json['conteudo'] = $aviso[0]['conteudo'];
			$json['data_envio'] = date("d/m/Y H:i:s", strtotime($aviso[0]['data_envio']));
			$json['data_alteracao'] = date("d/m/Y H:i:s", strtotime($aviso[0]['data_alteracao']));
    }else{
      $json['error'] = "Aviso não encontrado.";
    }
  }else{
    $json['error'] = "'id' não foi passado como parametro.";
  }
  echo json_encode($json);
?>