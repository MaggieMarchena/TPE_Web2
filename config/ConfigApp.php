<?php

  class ConfigApp {
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'NavController#showIndex',
      'home'=> 'NavController#showHome',
      'techniques'=> 'NavController#showTechniques',
      'examples'=> 'NavController#showExamples',
      'DIY'=> 'NavController#showDIY',
      'project'=> 'ProjectsController#showProject',

      'logout'=> 'UserController#destroy',
      'verifyUser'=> 'UserController#verify',
      'admin'=> 'NavController#showAdmin',
      'signUp'=> 'NavController#showSignUp',
      'createUser'=> 'UserController#createUser',

      'users'=> 'UserController#showUsers',

    ];
  }

?>
