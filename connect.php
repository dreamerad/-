<?php
require 'config.php';

$dsn = "mysql:host = " .HOST. ";dbname = " .DB_NAME. ";charset =" .CHARSET;
try{
    $dbconn = new PDO($dsn, USER, PASSWORD);
} catch(PDOException $e){
    echo 'Подключение не удалось:' .$e->getMessage();
}
