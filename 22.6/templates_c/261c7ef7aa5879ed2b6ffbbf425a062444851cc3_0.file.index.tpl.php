<?php
/* Smarty version 3.1.31, created on 2018-03-14 22:22:16
  from "/home/mateusz/www/php_projekty/22.6/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aa99288734505_59256508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '261c7ef7aa5879ed2b6ffbbf425a062444851cc3' => 
    array (
      0 => '/home/mateusz/www/php_projekty/22.6/templates/index.tpl',
      1 => 1521062533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa99288734505_59256508 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

		<table>
			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['i']->value[0];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['i']->value[1];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['i']->value[2];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['i']->value[3];?>
</td>
					</tr>	
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			
			
		</table>

		
	
	
</body>
</html><?php }
}
