<?php
/* Smarty version 3.1.31, created on 2018-03-14 21:31:36
  from "/home/mateusz/www/php_projekty/22.5/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aa986a8d217f8_61183986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27f15e5ea735905ae5dae1dd22c1f533845d733b' => 
    array (
      0 => '/home/mateusz/www/php_projekty/22.5/templates/index.tpl',
      1 => 1521059443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aa986a8d217f8_61183986 (Smarty_Internal_Template $_smarty_tpl) {
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
		<ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'fruit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fruit']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['fruit']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul>
	</table>
	
</body>
</html>
<?php }
}
