<?php
require_once('../config.php');
require('../api/Classes/ApiFunctions.php');

$cotation = new ApiFunctions;
$resultCotation = $cotation->searchCotation('USD', 'BRL');

$key_first = array_key_first($resultCotation);

$resultCotation = array_merge($resultCotation[$key_first], $resultCotation);
$resultCotation = array_pop($resultCotation);

echo '<pre>';
print_r($resultCotation);