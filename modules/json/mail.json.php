<?php
  header("Content-Type: application/json", true);

  if(!(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'))) {
    return false;
  }

  include "../../conf.php";
  include "../connection.php";
  include "../mail.class.php";

  if(isset($_GET['id'])){
    $mail = Mail::find($_GET['id']);
    if($mail){
      $json['day'] = date("d/m/Y", strtotime($mail[0]['created_at']));
      $json['hour'] = date("H:i:s", strtotime($mail[0]['created_at']));
      $json['name'] = $mail[0]['name'];
      $json['phone'] = $mail[0]['phone'];
      $json['mail'] = $mail[0]['mail'];
      $json['message'] = $mail[0]['message'];

    }else{
      $json['error'] = "Mensagem não encontrada.";
    }
  }else{
    $json['error'] = "'id' não foi passado como parametro.";
  }
  echo json_encode($json);
?>
