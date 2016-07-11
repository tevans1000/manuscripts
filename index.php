<?php

require 'templates/smarty-3.1.28/libs/Smarty.class.php';
include '../testsql.php';
$output = '';
foreach ($result as $row){
    $output .= '<li><strong>' . $row['id'] .':</strong> ' . $row['title'] . '</li>';
}

$smarty = new Smarty();

$smarty->assign('header','master/header.html');
$smarty->assign('footer','master/footer.html');
//$smarty->assign('content','homepage.html');
$smarty -> assign('content',"<ul>$output</ul>");

$smarty->display('master/master.tpl');

?>