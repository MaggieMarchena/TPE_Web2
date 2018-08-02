<?php
/* Smarty version 3.1.32, created on 2018-08-02 04:20:02
  from 'C:\xampp\htdocs\Projects\TPE_Web2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b626a524d5c09_74468722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '573f11e9a582c389fc99d053b464bbc10f2dfbf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\TPE_Web2\\templates\\nav.tpl',
      1 => 1533176397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b626a524d5c09_74468722 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home">Coneco</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="techniques">Técnicas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="examples">Ejemplos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="DIY">DIY</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="email" placeholder="Usuario@usuario.com">
      <input class="form-control mr-sm-2" type="password" placeholder="Contraseña">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
      <button class="btn btn-outline-success my-2 my-sm-0" type="button">Sign Up!</button>
    </form>
  </div>
</nav>
<?php }
}
