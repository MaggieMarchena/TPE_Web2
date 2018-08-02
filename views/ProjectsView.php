<?php

  class ProjectsView extends View{

    function loadProject($project){
      $this->smarty->assign('project', $project);
      $this->smarty->display('templates/project.tpl');
    }

    function showProjectForm(){
      $this->assignProjectToForm();
      $this->smarty->display('templates/formCreate.tpl');
    }

    function showProjectError($error, $title, $supplies, $steps){
      $this->assignProjectToForm($title, $supplies, $steps);
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/formCreate.tpl');
    }

    private function assignProjectToForm($title='', $supplies='', $steps=''){
      $this->smarty->assign('title', $title);
      $this->smarty->assign('supplies', $supplies);
      $this->smarty->assign('steps', $steps);
    }

  }
?>
