<?php
include 'simple_html_dom.php';

$html = file_get_html('http://bymas.ru');
$link = $html->find('div.f',0)->find('a');
// var_dump($link);
foreach($link as $values => $key){
    echo $key->href. "</br>";

}
?>