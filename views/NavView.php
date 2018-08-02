<?php

  class NavView extends View{

    // function loadPage($destination=''){
    //   $this->smarty->display('templates/'+$destination+'.tpl');
    // }

    function loadHome(){
      $this->smarty->display('templates/index.tpl');
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
