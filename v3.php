<?php
$name = $_FILES['file']['name'];
//$rand = rand(0000,9999);
$pth = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
if($size > 2* 1024 * 1024){
    exit('превышают байты') ;
}else{
             if(move_uploaded_file($pth, 'src/'.$name)){
        echo 'файл загружен';
        //header('Location: index.html');
        }
                    else { 
                        echo 'не загружен';
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
    <?php
    // $rot = '2433423';
    // echo st($rot,'42');
    // // echo ord($tor);
    ?>
</body>
</html>