<?php

require 'templates/smarty-3.1.28/libs/Smarty.class.php';

$smarty = new Smarty();

// assign variables expected by master.tpl
$smarty->assign('header','master/header.html');
$smarty->assign('footer','master/footer.html');
$smarty->assign('content','homepage.tpl');
// query database and assign result for use by homepage.tpl
$queryfile = 'getmanuscripts.sql';
include 'query.php';
$smarty -> assign('result',$result);

// display
$smarty->display('master/master.tpl');

?>