<?php
session_start();
require 'connect.php';
$_SESSION['id'] = $login;
//$id = $_SESSION['id'];
echo $_SESSION['login'];
$sql = "SELECT * FROM `accounts` WHERE `login` = '$login' ";
$res = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($res);
echo "Ваш логин: " .$data['login']. "</br>";
echo "Ваш E-MAIL: " .$data['email']. "</br>";
var_dump($_SESSION['login']);
var_dump($data['login']);
?>
