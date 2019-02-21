<?php
//This is the connection file
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root123');
define('DB_DATABASE', 'lota');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$dsn = "mysql:host=".DB_SERVER.";dbname=".DB_DATABASE;
$pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION);
?>