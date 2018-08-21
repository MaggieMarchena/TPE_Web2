<?php

  include_once 'config/ConfigApp.php';
  include_once 'controllers/Controller.php';
  include_once 'models/Model.php';
  include_once 'views/View.php';
  include_once 'controllers/NavController.php';
  include_once 'controllers/ProjectsController.php';
  include_once 'views/NavView.php';
  include_once 'views/ProjectsView.php';
  include_once 'models/ProjectsModel.php';
  include_once 'controllers/LoginController.php';
  include_once 'views/LoginView.php';
  include_once 'models/LoginModel.php';

  define('ACTION', 0);
  define('PARAMS', 1);

  function parseUrl($url){
    $urlExploded = explode('/', $url);
    $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
    $arrayReturn[ConfigApp::$PARAMS] = isset ($urlExploded[PARAMS]) ? array_slice($urlExploded, PARAMS) : null;
    return $arrayReturn;
  }

  if(isset($_GET['action'])){
    $urlData = parseUrl($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION];
    if(array_key_exists($action, ConfigApp::$ACTIONS)){
      $params = $urlData[ConfigApp::$PARAMS];
      $action = explode('#', ConfigApp::$ACTIONS[$action]);
      $controller = new $action[0]();
      $methodName = $action[1];
      if(isset($params) && $params != null){
        echo $controller->$methodName($params);
      }
      else {
        echo $controller->$methodName();
      }
    }
  }

?>
