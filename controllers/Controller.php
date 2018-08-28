<?php

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');
  define('ADMIN', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/admin');
  define('TRUE', 1);
  define('FALSE', 0);


  class Controller{

    protected $model;
    protected $view;

  }

?>
