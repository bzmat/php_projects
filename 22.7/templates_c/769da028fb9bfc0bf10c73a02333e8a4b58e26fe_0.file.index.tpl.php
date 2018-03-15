<?php
/* Smarty version 3.1.31, created on 2018-03-15 21:17:31
  from "/home/mateusz/www/php_projekty/22.7/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aaad4dbef1a87_09012490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '769da028fb9bfc0bf10c73a02333e8a4b58e26fe' => 
    array (
      0 => '/home/mateusz/www/php_projekty/22.7/templates/index.tpl',
      1 => 1521145048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aaad4dbef1a87_09012490 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

	<table>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'mountain', false, NULL, 'peaks', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mountain']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_peaks']->value['iteration']++;
?>
			<tr>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_peaks']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_peaks']->value['iteration'] : null);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mountain']->value['peak'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mountain']->value['height'];?>
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
