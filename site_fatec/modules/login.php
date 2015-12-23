<?php
  session_start();
  unset($_SESSION['logged']);
  if(isset($_POST['user']) && isset($_POST['pwd'])){
    if($_POST['user'] == "teste"){
      if($_POST['pwd'] == "teste"){
        $_SESSION['logged'] = true;
        header("Location: /site_novo/restritos.php");
      }else{
        header('Location: ../');
      }
    }else{
      header('Location: ../');
    }
  }else {
    header('Location: ../');
  }
?>
