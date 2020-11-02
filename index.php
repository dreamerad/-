<?php
require_once 'system/db.php';

//include_once 'inc/functions.php';


//if(!isset($av)){include_once 'inc/main.php';}
if(isset($_GET['registration'])){include_once 'inc/registration.php';} // Регистрация

if(isset($_GET['airport'])){include_once 'inc/airport/airport.php';} // Аэропорт

?>