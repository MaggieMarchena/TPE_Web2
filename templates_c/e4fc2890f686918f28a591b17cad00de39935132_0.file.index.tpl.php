<?php
/* Smarty version 3.1.32, created on 2018-07-27 12:22:10
  from 'C:\xampp\htdocs\Projects\TPE_Web2\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5af252dd4ff5_79655928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4fc2890f686918f28a591b17cad00de39935132' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\TPE_Web2\\templates\\index.tpl',
      1 => 1532686213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:home.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b5af252dd4ff5_79655928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="window-content">

  <?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
