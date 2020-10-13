<html>
<h1>Загрузка файлов</h1>
<form method="POST"  name = 'upload_file' enctype="multipart/form-data">
<input type="file" name = 'filename'>
<input type="hidden" name = "filename"></br>
<input type = 'submit' value = 'Загрузить'>
</form>
</html>
<?php
$size = $_FILES['filename']['size']; // Размер
$name = $_FILES['filename']['name']; // Название файлап
$dir = $_FILES['filename']['tmp_name']; // Путь файла ПК


if(move_uploaded_file($dir, 'img/' .$name)){ // $name ну
    echo "Файл успешно загружен";
    echo "Характеристики файла:</br>";
    echo "Имя: " .$name."</br>";
    echo "Имя: " .$size." байт </br>";

}else {
    echo "Ошибка при загрузке файла";
    
}

?>