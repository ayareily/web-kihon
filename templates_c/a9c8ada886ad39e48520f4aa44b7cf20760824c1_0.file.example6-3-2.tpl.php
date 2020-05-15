<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 09:45:51
  from 'C:\xampp\htdocs\kihon\templates\example6-3-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebe48afc532a8_43918268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c8ada886ad39e48520f4aa44b7cf20760824c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kihon\\templates\\example6-3-2.tpl',
      1 => 1589528749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebe48afc532a8_43918268 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<body>
<table border='1'>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</table>
</body>
</html><?php }
}
