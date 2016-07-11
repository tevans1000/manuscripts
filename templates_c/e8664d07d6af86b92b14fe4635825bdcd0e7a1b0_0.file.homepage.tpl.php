<?php
/* Smarty version 3.1.28, created on 2016-07-11 21:48:47
  from "C:\wamp\www\thesis\manuscripts\homepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5783f81f657769_85074262',
  'file_dependency' => 
  array (
    'e8664d07d6af86b92b14fe4635825bdcd0e7a1b0' => 
    array (
      0 => 'C:\\wamp\\www\\thesis\\manuscripts\\homepage.tpl',
      1 => 1468266525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5783f81f657769_85074262 ($_smarty_tpl) {
?>
<ul>
    <?php
$_from = $_smarty_tpl->tpl_vars['result']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$__foreach_row_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_row_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
        <li><ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['row']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_attribute_1_saved_item = isset($_smarty_tpl->tpl_vars['attribute']) ? $_smarty_tpl->tpl_vars['attribute'] : false;
$_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable();
$__foreach_attribute_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_attribute_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$__foreach_attribute_1_saved_local_item = $_smarty_tpl->tpl_vars['attribute'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['attribute']->key;?>
: <?php echo $_smarty_tpl->tpl_vars['attribute']->value;?>
</li>
            <?php
$_smarty_tpl->tpl_vars['attribute'] = $__foreach_attribute_1_saved_local_item;
}
}
if ($__foreach_attribute_1_saved_item) {
$_smarty_tpl->tpl_vars['attribute'] = $__foreach_attribute_1_saved_item;
}
?>
        </ul></li>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
</ul><?php }
}
