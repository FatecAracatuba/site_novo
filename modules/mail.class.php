<?php
  class Mail{
    public $id;
    public $name;
    public $mail;
    public $phone;
    public $message;

    function __construct($id, $name, $mail, $phone, $message){
      $this->id = $id;
      $this->name = $name;
      $this->mail = $mail;
      $this->phone = $phone;
      $this->message = $message;
    }

    function save(){
      try{
        $query = "INSERT INTO message VALUES (null, $this->name, $this->mail, $this->phone, $this->message)";
        mysql_query($query);
        $this->send();
        return true;
      }catch (Exception $e) {
        echo 'Error: ',  $e->getMessage(), "\n";
        return false;
      }
    }

    function send(){
      $to = "teste@example.com";//precisa colocar o do Giuliano
      $subject = "Site da Fatec - " . $this->name;
      $message = "
      <html>
        <head>
          <title>Contato com a Direção</title>
        </head>
        <body>
          <p>$this->message</p>

          <p>Dados do remetente</p>
          <p>Email: $this->email</p>
          <p>Fone: $this->phone</p>
        </body>
      </html>
      ";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: <webmaster@example.com>' . "\r\n";
      $headers .= 'Cc: myboss@example.com' . "\r\n";

      mail($to,$subject,$message,$headers);
    }
  }
?>
