<?php
/* Smarty version 3.1.28, created on 2016-07-11 16:23:59
  from "C:\wamp\www\thesis\manuscripts\templates\master\master.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5783abffbf2812_75963536',
  'file_dependency' => 
  array (
    '287ee235addc6235e4028767b1cc55b226237425' => 
    array (
      0 => 'C:\\wamp\\www\\thesis\\manuscripts\\templates\\master\\master.tpl',
      1 => 1468246793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5783abffbf2812_75963536 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='utf-8'>
</head>
<body>
    <header>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </header>
    <section>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </section>
    <footer>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </footer>
</body>
</html><?php }
}
