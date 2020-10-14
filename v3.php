<<<<<<< HEAD
<<<<<<< HEAD
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
=======

>>>>>>> 383c3e3ae4210a568c7ea2d05e92d952a84e16aa
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
<<<<<<< HEAD
    <?php
    // $rot = '2433423';
    // echo st($rot,'42');
    // // echo ord($tor);
    ?>
=======
  
=======
>>>>>>> fea1169c860a1c2331e58a0184d96d19b8443a4b
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
  

   
>>>>>>> 383c3e3ae4210a568c7ea2d05e92d952a84e16aa
</body>
</html>