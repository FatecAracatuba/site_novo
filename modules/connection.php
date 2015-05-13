<?php
  $database_connection = new Connection($conf['server'], $conf['user'], $conf['pass'], $conf['database']);

  class Connection{
    private $con;

    function __construct($server, $user, $pass, $database){
      $this->con = mysql_connect($server, $user, $pass);
      mysql_select_db($database);
    }

    function __destruct(){
      mysql_close($this->con);
    }
  }
?>
