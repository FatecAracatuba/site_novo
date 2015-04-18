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
      $query = "INSERT INTO message VALUES (null, $this->name, $this->mail, $this->phone, $this->message)";
      mysql_query($query);
      return mysql_error() ? false : true;
    }

    function send(){
      $to = "teste@example.com";
      $subject = "Site da Fatec - " . $this->name;
      $message = "
      <html>
        <head>
          <title>HTML email</title>
        </head>
        <body>
          <p>This email contains HTML Tags!</p>
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