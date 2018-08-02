<?php

  include_once 'libs/Smarty.class.php';

  class Model {

    protected $db;

    function __construct(){
      $this->db = new PDO('mysql:host=localhost;'.'dbname=conecodb;charset=utf8', 'root', '');
    }
  }

?>
