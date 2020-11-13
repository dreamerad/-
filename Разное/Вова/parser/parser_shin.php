<?php
require '../../Библиотеки/simple_html_dom.php';
$html = file_get_html('https://omsk.koleso.ru/catalog/tyres/all_sizes/');
$one = $html->find('.rating_wrapper');
foreach ($one as $val){
    
    echo $val->plaintext. "</br></br></br></br>";

}
?>