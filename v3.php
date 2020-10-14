<?php
$name = $_FILES['file']['name'];
$name.=rand(0000,9999);
$pth = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
if($size > 2* 1024 * 1024){
    exit('превышают байты ') ;
}
else{
    if(isset($_POST['ok'])){
       
             if(move_uploaded_file($pth, 'src/'.$name)){
        echo 'файл загружен';
        header('Location: index.html');
        exit;
                    }
                    else 'не загружен';
        
       
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <laber>загружай файл:</laber><br/>
        <input type="file" name="file"><br/>
        <laber>отправить</laber><br/>
        <input type="submit" name="ok"><br/>
    </form>
  

   
</body>
</html>