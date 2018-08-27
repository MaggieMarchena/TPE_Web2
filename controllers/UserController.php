<?php

  include_once 'models/UserModel.php';

  class UserController extends SecuredController {

    function __construct(){
      $this->view = new UserView();
      $this->model = new UserModel();
    }

    public function verify($newUser=''){

      if (empty($newUser)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!empty($username) && !empty($password)) {
          $user = $this->model->getUser($username);
          if (!empty($user) && password_verify($password, $user[0]['password'])) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $user[0]['name'];
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
      else {
        $username = $newUser['username'];
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $newUser['name'];
        $_SESSION['LAST_ACTIVITY'] = time();
        header('Location: '.HOME);
      }
    }

    public function destroy(){
      session_start();
      session_destroy();
      header('Location: '.HOME);
    }

    function createUser(){
      $username = $_POST['username'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $name = $_POST['name'];
      $user = $this->model->getUser($username);
      if (!$user) {
        $newUser = array('username' => $username,
        'password' => $password,
        'name' => $name);
        $this->model->create($newUser);
        $this->verify($newUser);
      }
      else {
        $this->view->loadSignUp(false, "El usuario ya existe!");
      }
    }

  }

?>
