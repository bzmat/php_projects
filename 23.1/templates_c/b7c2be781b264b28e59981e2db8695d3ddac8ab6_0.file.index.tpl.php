<?php
/* Smarty version 3.1.31, created on 2018-03-19 22:13:06
  from "/home/mateusz/www/php_projekty/23.1/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ab027e242dc85_11003497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7c2be781b264b28e59981e2db8695d3ddac8ab6' => 
    array (
      0 => '/home/mateusz/www/php_projekty/23.1/templates/index.tpl',
      1 => 1521493982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab027e242dc85_11003497 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'row', false, NULL, 'books', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
			<a href=""><li><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</li></a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</ul>
	
	
</body>
</html><?php }
}
