<?php

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
  define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/admin');

  class Controller{

    protected $model;
    protected $view;

  }

?>
