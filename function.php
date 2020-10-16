<?php

function auth (){
    if ($_SESSION['login'] = false)
    header('Location: registration.php');
}