<?php

  class LoginModel extends Model{

    function getUser($username){
      $query = $this->db->prepare("select * from user where username=? limit 1");
      $query->execute([$username]);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

  }

?>
