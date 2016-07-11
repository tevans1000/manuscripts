<?php

require 'templates/smarty-3.1.28/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign('header','master/header.html');
$smarty->assign('footer','master/footer.html');
$smarty->assign('content','homepage.html');

$smarty->display('master/master.tpl');

?>