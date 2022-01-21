<?php 
include 'database/QueryBuilder.php';
$pdo = include 'database/startDB.php';
$querybuilder = new QueryBuilder($pdo);
$querybuilder->delete('users', $_GET['id']);
header("Location:index.php");