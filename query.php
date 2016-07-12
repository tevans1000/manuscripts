<?php

include '../util/connect.php';

$stmt = $connection -> prepare(file_get_contents('../util/sql/' . $queryfile));
$stmt -> execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt -> fetchAll();

?>