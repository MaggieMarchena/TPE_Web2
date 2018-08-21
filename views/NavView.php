<?php

  class NavView extends View{

    // function loadPage($destination=''){
    //   $this->smarty->display('templates/'+$destination+'.tpl');
    // }

    function loadIndex(){
      $this->smarty->display('templates/index.tpl');
    }

    function loadHome(){
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

    function loadAdmin(){
      $this->smarty->display('templates/admin.tpl');
    }

  }


?>
