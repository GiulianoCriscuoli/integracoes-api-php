<?php
require_once('../config.php');
require('../api/Classes/ApiFunctions.php');

$cotation = new ApiFunctions;
$resultCotation = $cotation->searchCotation();

echo '<pre>';
print_r($resultCotation);