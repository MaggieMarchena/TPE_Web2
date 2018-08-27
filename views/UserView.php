<?php

  class UserView extends View{

    function loadSignUp($session, $error=''){
      $this->smarty->assign('session', $session);
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/signUp.tpl');
    }

    function loadAdmin($session, $name=''){
      $this->smarty->assign('session', $session);
      $this->smarty->assign('name', $name);
      $this->smarty->display('templates/admin.tpl');
    }

  }

?>
