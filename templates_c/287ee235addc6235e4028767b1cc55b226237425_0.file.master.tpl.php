<?php
/* Smarty version 3.1.28, created on 2016-07-11 18:11:28
  from "C:\wamp\www\thesis\manuscripts\templates\master\master.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5783c530a05c03_31956509',
  'file_dependency' => 
  array (
    '287ee235addc6235e4028767b1cc55b226237425' => 
    array (
      0 => 'C:\\wamp\\www\\thesis\\manuscripts\\templates\\master\\master.tpl',
      1 => 1468253446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5783c530a05c03_31956509 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang='en'>
    <meta charset='utf-8'>
    
    <!-- Include BootStrap -->
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <?php echo '<script'; ?>
 src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'><?php echo '</script'; ?>
>
</head>
<body>
    <header>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </header>
    <section>
        
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </section>
    <footer>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </footer>
</body>
</html><?php }
}
