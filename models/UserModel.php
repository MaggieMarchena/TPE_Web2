<?php

  class UserModel extends Model{

    function create($user){
      $query = $this->db->prepare("insert into user (username, password, name) values (:username,:password,:name)");
      $query->execute($user);
    }

    function getUser($username){
      $query = $this->db->prepare("select * from user where username=? limit 1");
      $query->execute([$username]);
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function setAdminValue($value){
      // code...
    }

    function delete($value=''){
      // code...
    }

  }

?>
