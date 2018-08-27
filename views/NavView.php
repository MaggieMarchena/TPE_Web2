<?php

  class NavView extends View{

    // function loadPage($destination=''){
    //   $this->smarty->display('templates/'+$destination+'.tpl');
    // }

    function loadIndex($session, $name=''){
      $this->smarty->assign('session', $session);
      $this->smarty->assign('name', $name);
      $this->smarty->display('templates/index.tpl');
    }

    function loadHome($session, $name=''){
      $this->smarty->assign('session', $session);
      $this->smarty->assign('name', $name);
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

  }


?>
