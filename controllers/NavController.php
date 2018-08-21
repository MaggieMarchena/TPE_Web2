<?php

class NavController extends Controller{

  function __construct(){
    $this->view = new NavView();
    $this->model = new ProjectsModel();
  }

  // function showPage($params=''){
  //   if (!empty($params)) {
  //     $destination = $params[0];
  //     $this->view->loadPage($destination);
  //   }
  //   else {
  //     $this->view->loadPage();
  //   }
  // }

  function showIndex(){
    $this->view->loadIndex();
  }

  function showHome(){
    $this->view->loadHome();
  }

  function showTechniques(){
    $this->view->loadTechniques();
  }

  function showExamples(){
    $this->view->loadExamples();
  }

  function showDIY(){
    $projects = $this->model->getProjects();
    $this->view->loadDIY($projects);
  }

  function showAdmin(){
    $this->view->loadAdmin();
  }

}

?>
