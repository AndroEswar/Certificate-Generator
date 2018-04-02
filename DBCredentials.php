<?php

/**
 *
 */

class DBCredentials
{
  private $host = "localhost";
  private $db = "maindb";
  private $user = "root";
  private $pass = "";

  protected function __construct()
  {
    /**/
  }

  protected function getHost(){
    return $this->host;
  }

  protected function getDb(){
    return $this->db;
  }

  protected function getUser(){
    return $this->user;
  }

  protected function getPass(){
    return $this->pass;
  }

}


 ?>
