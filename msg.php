<?php
// 29.10.20 by dreamer
// email: dreameryandex.22013@gmail.com


$mail = 'dreameryandex.22013@gmail.com'; // Почта куда отправляются письма
$token = '1346840359:AAFn4z-WPOSjKqGbAGiMOb0ndJfdx5aD0k4'; // Токен телеграм чата
$chatid = '598338133'; // id телеграм чата
$number = $_POST['number']; // Номер телефона
$name = $_POST['name']; // Имя
// Заполните ниже перечисленные переменные в соответствии с формой опроса
$house = $_POST['']; // Тип отапливаемого помещения
$live = $_POST['']; // Проживание в доме
$area = $_POST['']; // Площадь помещения
$money = $_POST['']; // Бюджет
$time = $_POST['']; // Время
$sposob = $_POST['']; // Способ топки
$v = $_POST['']; // Объем парного помещения
$sposob2 = $_POST['']; // Способ нагрева воды
$v2 = $_POST['']; // Объем нагреваемой воды


$message = "Номер телефона: " .$number. "\r
Имя клиента: " .$name. "\r
Тип отапливаемого помещения: " .$house. "\r
Проживание в доме: " .$live. "\r
Площадь помещения: " .$area. "\r
Бюджет: " .$money. "\r
Время: " .$time. "\r
Способ топки: " .$sposob. "\r
Объем парного помещения: " .$v. "\r
Способ нагрева воды: " .$sposob2. "\r
Объем нагреваемой воды: " .$v2. "\r";

// Отправляем
if(isset($_POST['ok'])){
    if(!empty($number && $name)){
mail($mail, 'Заявка', $message); // Отправка на почу
file_get_contents("https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chatid."&text=".urlencode($message)); // Отправка в телеграм
}else{
    echo "Заполните все поля";
}
}

?>
