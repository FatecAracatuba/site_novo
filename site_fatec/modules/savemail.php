<?php
  header('Content-Type: application/json');
  include "../conf.php";
  include "connection.php";
  include "mail.class.php";

  $nome = isset($_POST['name']) && !empty($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "Anônimo";
  $email = isset($_POST['mail']) && !empty($_POST['mail']) ? mysql_real_escape_string($_POST['mail']) : "Anônimo";
  $phone =  isset($_POST['phone']) && !empty($_POST['phone']) ? mysql_real_escape_string($_POST['phone']) : "Anônimo";
  $message =  isset($_POST['message']) ? mysql_real_escape_string($_POST['message']) : "";
  $date = date("Y-m-d H:i:s");

  if (strlen($message) > 30) {
    $mail = new Mail(null, $nome, $email, $phone, $message, $date);
    if($mail->save()){
      $response = array("success" => true);
    }else{
      $response = array("success" => false);
    }
  }else{
    $response = array("error" => "Digita mais um pouquinho... O minimo é 30 caracteres. \nDigitou: ". strlen($message) );
  }

  echo json_encode($response);
?>
