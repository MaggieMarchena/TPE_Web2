<?php

  class SecuredController extends Controller{

    protected $model;
    protected $view;

    function __construct(){
      session_start();
      if (isset($_SESSION['username'])){
        if (time() - $_SESSION['LAST_ACTIVITY'] > 1200) {
          header('Location: '.LOGOUT);
          die();
        }
        $_SESSION['LAST_ACTIVITY'] = time();
      }
      else {
        header('Location: '.LOGIN);
        die();
      }
    }

  }

?>
