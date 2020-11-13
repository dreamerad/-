<?php
require_once 'mysql/connect.php';
require_once 'system/functions.php';

if ($_SERVER['REQUEST_URI'] == '/') $page = 'login';
else {

    $page = substr($_SERVER['REQUEST_URI'], 1);
    if(!preg_match('/^[A-z0-9]{3,15}$/', $page))
    exit('error url');
}
session_start();

if(file_exists('all/' .$page. '.php')) include 'all/' .$page. '.php';
else if($_SESSION['ulogin'] == 1 and file_exists('auth/' .$page. '.php')) include 'auth/' .$page. '.php';
else if($_SESSION['ulogin'] != 1 and file_exists('quest/' .$page. '.php')) include 'quest/' .$page. '.php';
else exit('Страница 404');
    
?>