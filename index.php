<?php

require 'templates/smarty-3.1.28/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('message','Hello, view!');

$smarty->display('master/master.tpl');

?>