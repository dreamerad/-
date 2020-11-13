<?php
session_start();
require 'config.php';

$dsn = "mysql:host =".HOST.";dbname=".DB_NAME.";charset =" .CHARSET;
try{
    $dbconn = new PDO($dsn, USER, PASSWORD);
} catch(PDOException $e){
    echo 'Подключение не удалось:' .$e->getMessage();
}

$sql = "SELECT * FROM avia_users WHERE `nick` = '$_SESSION[nick]'";
$query = $dbconn->query($sql);
$av = $query->fetch();