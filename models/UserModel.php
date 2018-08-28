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

    function getAll(){
      $query = $this->db->prepare("select * from user");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function setAdminValue($value, $username){
      $query = $this->db->prepare("update user set admin=? where username=?");
      $query->execute($value, $username);
    }

    function delete($value=''){
      // code...
    }

  }

?>
