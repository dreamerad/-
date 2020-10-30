<?php
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

$query = "SELECT * FROM users";
$res = $dbconn->query($query);
try{
    while($user = $res->fetch())
    echo $user['user_name']. "</br>";
    
    } catch(PDOException $e) {
        echo "Ошибка: ". $e->getMessage();
    }

    $query = "SELECT * FROM users WHERE id = ?";
    $res = $dbconn->prepare($query);
    $res->execute([2]);
    echo $res->fetch()['user_name'];







//exec() - если не требуется получать результат (INSERT, UPDATE)
//Если запрос содержит параметры, то должен быть параметризованый запрос (prepare, execute) 