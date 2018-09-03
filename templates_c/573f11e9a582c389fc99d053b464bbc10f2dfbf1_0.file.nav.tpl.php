<?php
/* Smarty version 3.1.32, created on 2018-09-03 02:32:06
  from 'C:\xampp\htdocs\Projects\TPE_Web2\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8c810623bcb0_97533205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '573f11e9a582c389fc99d053b464bbc10f2dfbf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\TPE_Web2\\templates\\nav.tpl',
      1 => 1535934708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8c810623bcb0_97533205 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <li class="navbar-brand">Coneco</li>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <div class="nav" id="nav">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home" id="home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="techniques" id="techniques">Técnicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="examples" id="examples">Ejemplos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="DIY" id="DIY">DIY</a>
        </li>
      </ul>
    </div>
    <?php if (!$_smarty_tpl->tpl_vars['session']->value) {?>
      <form class="form-inline my-2 my-lg-0" action="verifyUser" method="post">
        <input class="form-control mr-sm-2" id="username" name="username" type="email" placeholder="Usuario@usuario.com" required>
        <input class="form-control mr-sm-2" id="password" name="password" type="password" placeholder="Contraseña" required>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
      </form>
      <form class="form-inline my-2 my-lg-0" action="signUp" method="post">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up!</button>
      </form>
    <?php } else { ?>
      <div class="mx-auto">
        <h4>Hola <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h4>
      </div>
      <form class="form-inline my-2 my-lg-0" action="logout" method="post">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
      </form>
    <?php }?>

  </div>
</nav>
<?php }
}
