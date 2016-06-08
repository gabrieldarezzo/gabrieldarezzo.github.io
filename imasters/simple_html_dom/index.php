<?php

require_once 'simple_html_dom.php';

$html = file_get_contents('pagina.html');

$html = str_get_html($html);

$html->find('link', 0)->href  = 'test';
$html->find('link', 1)->href  = '123';

echo $html;