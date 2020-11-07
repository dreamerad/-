<?php
include_once '../Библиотеки/simple_html_dom.php';
// include_once 'curl.php';


$html = file_get_html('https://ntschool.ru/');
$courses = $html->find('h3');
foreach ($courses as $course){
    $a = $course->find('a', 0);
    
    $one = file_get_html('https://ntschool.ru/' . $a->href);
    $cost = $one->find('.newPrice', 0);
    echo $a->plaintext . ' ' . $cost->plaintext .'</br>';
}





?>
