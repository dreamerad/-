<!DOCTYPE html>
<html lang="ru">
<head>
<title>Добавление новости</title>
<meta charset='utf-8'>
</head>
<body>
<table>
<form  method = 'POST'>
<tr>
<td>Название</td>
<td><input type= ' text' name='name'></td>
</tr>
<tr>
<td>Содержимое:</td>
<td><textarea name='content' rows='1O' cols='40'></textarea></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name = 'ok' value='Добавить'></td>
</tr>
</form>
</table>
</body>
</html>

<?php
//СПРАВКА
//exec - для запросов в которых не требуется возврат результата(INSERT)
require 'config.php';

$dsn = "mysql:host =".HOST.";dbname=".DB_NAME.";charset =" .CHARSET;
try{
    $dbconn = new PDO($dsn, USER, PASSWORD);
} catch(PDOException $e){
    echo 'Подключение не удалось:' .$e->getMessage();
}


// $sql = "CREATE TABLE ludi (
// catalog_id INT(11) NOT NULL )";
// $count = $dbconn->exec($sql);

// if($count != false){
//     echo "Таблица успешно создана";
// } else {
//     echo "<pre>";
//     print_r ($dbconn->errorInfo());
//     echo "ошибка";
//     echo "</pre>";
// }
// Вывод пользователя
$query = "SELECT * FROM users";
$res = $dbconn->query($query);
try{
    while($user = $res->fetch())
    echo $user['user_name']. "</br>";
    
    } catch(PDOException $e) {
        echo "Ошибка: ". $e->getMessage();
    }
// Параметризованный запрос (Если в запросе есть параметры)
    $query = "SELECT * FROM users WHERE id = ?";
    $res = $dbconn->prepare($query);
    $res->execute([2]);
    echo $res->fetch()['user_name'];

    //Пример связывания таблиц

if(isset($_POST['ok'])){
$query = "INSERT INTO news VALUES (NULL, :name ,NOW())";
$news = $dbconn->prepare($query);
$news->execute([
    'name' => $_POST['name']]);
$news_id = $dbconn->lastInsertId(); //получаем сгенерированный id для news_id (связываем)

//Вставляем содержимое новостного сообщения в news_content
$query = "INSERT INTO news_content VALUES (NULL, :content, :news_id)";
$news = $dbconn->prepare($query);
$news ->execute(['content' => $_POST['content'], 'news_id' => $news_id]);
}






