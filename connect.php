<?php
require 'config.php';
$con = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);

if (!$con){
    echo 'Отсутствует подключение к базе данных' .mysqli_error($con);
}