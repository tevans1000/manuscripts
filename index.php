<?php

require 'templates/smarty-3.1.28/libs/Smarty.class.php';

$smarty = new Smarty();

// assign variables expected by master.tpl
$smarty->assign('header','master/header.html');
$smarty->assign('footer','master/footer.html');
$smarty->assign('content','homepage.tpl');
// assign variables expected by homepage.tpl
include '../get-manuscripts.php';
$smarty -> assign('result',$result);

$smarty->display('master/master.tpl');

?>