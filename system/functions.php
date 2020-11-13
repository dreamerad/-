<?php
function email_valid(){
    
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))  
    message('E-mail указан неверно');
}

function random_str($num = 30){
    return substr(str_shuffle('0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'), 0, $num);
}
function not_found(){
    exit('Страница 404');
}
?>