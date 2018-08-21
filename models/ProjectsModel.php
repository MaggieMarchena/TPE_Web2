<?php

  class ProjectsModel extends Model{

    function getProjects(){
      $query = $this->db->prepare("select * from project");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProjectById($id){
      $query = $this->db->prepare("select * from project where id=?");
      $query->execute([$id]);
      return $query->fetch(PDO::FETCH_ASSOC);
    }

    function saveProject($title, $difficulty, $id_difficulty, $supplies, $steps){
      $query = $this->db->prepare("INSERT INTO project(title, difficulty, id_difficulty, supplies, steps) VALUES(?,?,?,?,?)");
      $query->execute([$title, $difficulty, $id_difficulty, $supplies, $steps]);
    }

    function deleteProject($id){
      $query = $this->db->prepare("delete from task where id_task=?");
      $query->execute([$id]);
    }

  }


?>
