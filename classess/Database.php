<?php

class Database{
  private $servername = 'localhost';
  private $username = 'root';
  private $password = '';
  private $db_name = 'e-library.system';
  public $conn;

  public function __construct()
{
  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);

  if($this->conn == TRUE){
    return $this->conn;
  }else{
    return FALSE;
  }
}

}


?>