<?php

  class NavView extends View{

    // function loadPage($destination=''){
    //   $this->smarty->display('templates/'+$destination+'.tpl');
    // }

    function loadIndex($session){
      // $hash = password_hash('123456', PASSWORD_DEFAULT);
      // var_dump($hash);
      // die();
      $this->smarty->assign('session', $session);
      $this->smarty->display('templates/index.tpl');
    }

    function loadHome($session){
      $this->smarty->assign('session', $session);
      $this->smarty->display('templates/home.tpl');
    }

    function loadTechniques(){
      $this->smarty->display('templates/techniques.tpl');
    }

    function loadExamples(){
      $this->smarty->display('templates/examples.tpl');
    }

    function loadDIY($projects){
      $this->smarty->assign('projects', $projects);
      $this->smarty->display('templates/DIY.tpl');
    }

    function loadAdmin($session){
      $this->smarty->assign('session', $session);
      $this->smarty->display('templates/admin.tpl');
    }

  }


?>
