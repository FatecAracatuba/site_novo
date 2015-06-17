<?php
  class Mail{
    public $id;
    public $name;
    public $mail;
    public $phone;
    public $message;
    public $created_at;

    function __construct($id, $name, $mail, $phone, $message, $created_at){
      $this->id = $id;
      $this->name = $name;
      $this->mail = $mail;
      $this->phone = $phone;
      $this->message = $message;
      $this->created_at = $created_at;
    }

    function save(){
      try{
        $query = "INSERT INTO mail VALUES (null, '$this->name', '$this->mail', '$this->phone', '$this->message', '$this->created_at')";
        mysql_query($query);
        $this->send();
        return true;
      }catch (Exception $e) {
        echo 'Error: ',  $e->getMessage(), "\n";
        return false;
      }
    }

    static function allMail(){
      try{
        $query = "SELECT * FROM mail ORDER BY created_at DESC";
        $result = mysql_query($query);

        while ( $rs = mysql_fetch_assoc($result)) {
          $data[] = $rs;
        }

        if (isset($data))
          return $data;
        return false;
      }catch (Exception $e) {
        echo 'Error: ',  $e->getMessage(), "\n";
        return false;
      }
    }

    static function find($id){
      try{
        $query = "SELECT * FROM mail where id = $id";
        $result = mysql_query($query);

        while ( $rs = mysql_fetch_assoc($result)) {
          $data[] = $rs;
        }

        if (isset($data))
          return $data;
        return false;
      }catch (Exception $e) {
        echo 'Error: ',  $e->getMessage(), "\n";
        return false;
      }
    }

    function send(){
      $to = "oargus.g@gmail.com";//precisa colocar o do Giuliano
      $subject = "Site da Fatec - " . $this->name;
      $message = "
      <html>
        <head>
          <title>Contato com a Direção</title>
        </head>
        <body>
          <p>$this->message</p>

          <p>Dados do remetente</p>
          <p>Email: $this->mail</p>
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
