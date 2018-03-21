<?php
/* Smarty version 3.1.31, created on 2018-03-19 21:20:36
  from "/home/mateusz/www/php_projekty/22.11/templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ab01b941ee303_89263142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0693f5a2692e0ff3a6bd4e7c84e9bac4271b93f9' => 
    array (
      0 => '/home/mateusz/www/php_projekty/22.11/templates/layout.tpl',
      1 => 1521490694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:novel.tpl' => 1,
  ),
),false)) {
function content_5ab01b941ee303_89263142 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>

	<div class="content">
		<?php $_smarty_tpl->_subTemplateRender("file:novel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>
	
</body>
</html><?php }
}
