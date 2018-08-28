<?php

class NavController extends SecuredController{

  function __construct(){
    $this->view = new NavView();
    $this->userView = new UserView();
    $this->model = new ProjectsModel();
    $this->userModel = new UserModel();
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
    session_start();
    $session = !empty($_SESSION);
    if ($session) {
      $name = $_SESSION['name'];
      $user = $this->userModel->getUser($_SESSION['username']);
      if ($user[0]['admin'] == 1) {
        $this->userView->loadAdmin($session, $name);
      }
      else {
        $this->view->loadIndex($session, $name);
      }
    }
    else {
      $this->view->loadIndex($session);
    }
  }

  function showHome(){
    session_start();
    $session = !empty($_SESSION);
    if ($session) {
      $name = $_SESSION['name'];
      $user = $this->userModel->getUser($_SESSION['username']);
      if ($user[0]['admin'] == 1) {
        $this->userView->loadAdmin($session, $name);
      }
      else {
        $this->view->loadHome($session, $name);
      }
    }
    else {
      $this->view->loadHome($session);
    }
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
    session_start();
    $session = !empty($_SESSION);
    if (isset($_SESSION['name'])) {
      $name = $_SESSION['name'];
      $this->userView->loadAdmin($session, $name);
    }
    else {
      $this->userView->loadAdmin($session);
    }
  }

  function showSignUp(){
    session_start();
    $session = !empty($_SESSION);
    $this->userView->loadSignUp($session);
  }

}

?>
