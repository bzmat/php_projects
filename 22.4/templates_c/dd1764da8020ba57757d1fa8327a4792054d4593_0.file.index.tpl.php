<?php
/* Smarty version 3.1.31, created on 2018-03-14 21:11:47
  from "/home/mateusz/www/php_projekty/22.4/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aa9820375d636_04290656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1764da8020ba57757d1fa8327a4792054d4593' => 
    array (
      0 => '/home/mateusz/www/php_projekty/22.4/templates/index.tpl',
      1 => 1521058304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa9820375d636_04290656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	<p><?php echo nl2br($_smarty_tpl->tpl_vars['content']->value);?>
</p>
</body>
</html><?php }
}
