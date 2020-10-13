<html>
<h1>Загрузка файлов</h1>
<form method="POST"  name = 'upload_file' enctype="multipart/form-data">
<input type="file" name = 'filename'>
<input type = 'submit' value = 'Загрузить'>
</form>
</html>

<?php
$size = $_FILES['filename']['size']; // Размер
$name = $_FILES['filename']['name']; // Название файла
$dir = $_FILES['filename']['tmp_name']; // Путь файла ПК

// 1кб = 1024 б && 1 мб = 1024кб // 2мб =  2 * 1024 * 1024

if($size > 2 * 1024 * 1024){
    exit('Размер файла превышает 2 Мб'); // Заканчиваем выполнение скрипта
}else{

if(move_uploaded_file($dir, 'img/' .$name)){ // $name нужна для сохранения названия
    echo "Файл успешно загружен</br></br>";
    echo "Характеристики файла:</br>";
    echo "Имя: " .$name."</br>";
    echo "Размер: " .$size." байт </br>";

}
}

?>