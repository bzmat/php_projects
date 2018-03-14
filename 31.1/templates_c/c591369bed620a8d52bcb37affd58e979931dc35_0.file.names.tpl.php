<?php
/* Smarty version 3.1.32-dev-38, created on 2018-03-06 21:07:23
  from '/home/mateusz/www/php_projekty/31.1/templates/names.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a9ef4fb93f7d3_00721215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c591369bed620a8d52bcb37affd58e979931dc35' => 
    array (
      0 => '/home/mateusz/www/php_projekty/31.1/templates/names.tpl',
      1 => 1520366840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9ef4fb93f7d3_00721215 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name', false, NULL, 'n', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_n']->value['iteration']++;
?>
		<tr>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_n']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_n']->value['iteration'] : null);?>
.</td>
			<td><?php echo $_smarty_tpl->tpl_vars['name']->value->getName();?>
</td>
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>		
</body>
</html>

<?php }
}
