<?php
/* Smarty version 3.1.31, created on 2018-03-19 21:07:44
  from "/home/mateusz/www/php_projekty/22.10/templates/novel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ab01890c5fd37_06694251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cfbded879bdf7f161c41a725dd0da4dbae0001a' => 
    array (
      0 => '/home/mateusz/www/php_projekty/22.10/templates/novel.tpl',
      1 => 1521490042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab01890c5fd37_06694251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<p><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</p>	
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
