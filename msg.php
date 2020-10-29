<?php
// 29.10.20 by dreamer
// email: dreameryandex.22013@gmail.com
// telegram: vovaa55?>
<form  method="POST">
<input type="text" name="number" >
<input type="tetx" name="name" >
<input type="radio" name="summa" value="100">
<input type="radio" name="summa" value="299">
<input type="radio" name="summa" value="3343">
<input type="submit" name="ok">

</form>
<?php


$mail = 'dreameryandex.22013@gmail.com'; // Почта куда отправляются письма
$token = '1346840359:AAFn4z-WPOSjKqGbAGiMOb0ndJfdx5aD0k4'; // Токен телеграм чата
$chatid = '598338133'; // id телеграм чата
$number = $_POST['number']; // Номер телефона
$name = $_POST['name']; // Имя
$summa = $_POST['summa']; // бюджет ТЕСТОВЫЙ - УДАЛИТЬ

$message = "Номер телефона: " .$number. "\r
Имя клиента: " .$name. "\r
Сумма: " .$summa. "\r";

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
