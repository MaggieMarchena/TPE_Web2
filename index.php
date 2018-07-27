<?php

  define('HOME', 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/');

  include_once 'libs/Smarty.class.php';

  function home(){
    $mainTitle = 'Construcción ecológica';
    $smarty = new Smarty();
    $smarty->assign('mainTitle', $mainTitle);
    // $smarty->debugging = true;
    $smarty->display('templates/index.tpl');
  }

  function techniques(){
    $smarty = new Smarty();
    $smarty->assign('techniques', $techniques);
    // $smarty->debugging = true;
    $smarty->display('templates/techniques.tpl');
  }

  function examples(){
    $smarty = new Smarty();
    $smarty->assign('examples', $examples);
    // $smarty->debugging = true;
    $smarty->display('templates/examples.tpl');
  }

?>
