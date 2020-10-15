<?php
session_start();
require 'config.php';
$con = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);

if (!$con){
    echo 'Отсутствует подключение к базе данных' .mysqli_error($con);
}
//require 'connect.php';
// Переменные
$login = (trim($_POST['login']));
$email = (trim($_POST['email']));
$password = $_POST['password'];
$password2 = $_POST['password2'];
$sex = $_POST['sex'];
$error = [];

//////////////////////////////

if($_POST['ok']){
if(!empty($login) && !empty($email) && !empty($password) && !empty($password2)){ // Проверки на не пустоту
if(strlen($login) <= 15){ // Длина логина
    if(strlen($email) <= 30){ // Длина email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($password == $password2)
            {
                $sql = "SELECT login, email FROM `accounts` WHERE `login` = '$login' OR `email` = '$email'";
                $query = mysqli_query($con, $sql);
                $array = mysqli_fetch_array($query);
                if($array <= 0){
                    
                    $sqlinsert = "INSERT INTO `accounts`(`login`, `password`, `email`) VALUES ('$login', '$password', '$email')"; 
                    // добавить в запрос пол и переоформить условия и вывод ошибок
                    $result2 = mysqli_query($con, $sqlinsert);
                    if($result2){
                        echo "нЕУспешно";
                    }
                        //echo "Error! ----> ".array_shift($error);
                        var_dump($result2);
                    
var_dump($error);
                }else{
                    $error[] = "Пользователь с таким логином уже зарегистрирован";
                    echo "Такой чел уже есть в системе";

                }
                
                //password_hash($password, PASSWORD_DEFAULT);

            }else{
                $error[] = "Введённые пароли не совпадают";
                echo "нет";}
            
        }else{
            $error[] = "Введённая почта введена не верна";
            echo "нет";

        }
    }else{
    echo "Длина почты должна быть меньше 30 символов";
    $error[] = "Длина e-mail должна быть меньше 30 символов";
    }
}else{
    echo "Длина логина должна быть меньше 15 символов";
    $error[] = "Длина логина должна быть меньше 15 символов";
}

}else{
    $error[]= "Заполните все поля";
    echo "ПУсто";

    //var_dump(var_dump($login));
}}



