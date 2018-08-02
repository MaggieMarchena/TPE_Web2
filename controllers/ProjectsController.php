<?php

class ProjectsController extends Controller{

  function __construct(){
    $this->view = new ProjectsView();
    $this->model = new ProjectsModel();
  }

  function showProject($params){
    $id = $params[0];
    $project = $this->model->getProjectById($id);
    $this->view->loadProject($project);
  }

  public function create(){
      $this->view->showProjectForm();
  }

  public function store(){
    $title = $_POST['title'];
    // $dificulty = $_POST['difficulty'];
    // $id_dificulty = isset($_POST['done']) ? $_POST['done'] : 0;
    $supplies = $_POST['supplies'];
    $steps = $_POST['steps'];

    if(!empty($_POST['title'])){
      $this->tasksModel->saveProject($title, $description, $done);
    }
    else {
      $this->view->showProjectError("El campo título es requerido", $title, $supplies, $steps);
    }
  }

  public function delete($params){
    $id = $params[0];
    $this->projectsModel->deleteProject($id);
  }

}

?>
