<?php
include 'database/QueryBuilder.php';
$pdo = include 'database/startDB.php';
$querybulder = new QueryBuilder($pdo);
$querybulder->update('users',$_POST,$_GET['id']);
header("Location:index.php");
?>