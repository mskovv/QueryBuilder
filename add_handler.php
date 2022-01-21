<?php
include 'database/QueryBuilder.php';
$pdo = include 'database/startDB.php';
$querybuilder = new QueryBuilder($pdo);
$querybuilder->create('users', $_POST);
header("Location:index.php");

?>