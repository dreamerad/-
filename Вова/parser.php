<?php
include 'simple_html_dom.php';

$html = file_get_html('https://www.gazeta.ru/');
$one = $html->find('nav[class=header20-nav]'); // Парсим название разделов
foreach($one as $val){
    $a = $val->find('a'); // Ищем все ссылки
    
    $two = file_get_html('https://www.gazeta.ru/' .$a->href); // Парсим название статьей
    $two2 = $two->find('span.[itemprop="headline"]'); // Ищем название статьей
    echo $val->plaintext. '</br>';
    echo $two2->plaintext. '</br>';

    var_dump($two);
// break;
}


?>