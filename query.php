<?php

include '../connect.php';

$stmt = $connection -> prepare(file_get_contents($queryfile));
$stmt -> execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt -> fetchAll();

?>