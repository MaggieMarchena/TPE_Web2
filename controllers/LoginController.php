<?php

  include_once 'models/LoginModel.php';
  include_once 'views/LoginView.php';

  class LoginController extends Controller{

    function __construct(){
      $this->model = new LoginModel();
      //$this->view = new LoginView();
    }

    public function verify(){

      $username = $_POST['username'];
      $password = $_POST['password'];

      if (!empty($username) && !empty($password)) {
        $user = $this->model->getUser($username);
        // print_r($user);
        // die();
        if (!empty($user) && password_verify($password, $user[0]['password'])) {
          session_start();
          $_SESSION['username'] = $username;
          $_SESSION['LAST_ACTIVITY'] = time();
          if ($user[0]['admin'] == 1) {
            header('Location: '.ADMIN);
          }
          else {
            header('Location: '.HOME);
          }
        }
      }

    }

    public function destroy(){
      session_start();
      session_destroy();
      header('Location: '.HOME);
    }

  }

?>
