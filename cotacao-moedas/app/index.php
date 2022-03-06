<?php
require_once('../config.php');
require('../api/Classes/ApiFunctions.php');

$cotation = new ApiFunctions;
$resultCotation = $cotation->searchCotation('USD', 'BRL');

$key_first = array_key_first($resultCotation);

$resultCotation = array_merge($resultCotation[$key_first], $resultCotation);
$resultCotation = array_pop($resultCotation);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1px" style="text-align: center;">
        <th>
            <thead>
                <tr>
                    <td>CÓDIGO</td>
                    <td>CÓDIGO LOCAL</td>
                    <td>MOEDA</td>
                    <td>MÁX</td>
                    <td>MIN</td>
                    <td>VARIAÇÃO</td>
                    <td>PORCENTAGEM</td>
                    <td>COMPRA</td>
                    <td>VENDA</td>
                </tr>
            </thead>
        </th>
       
        <tbody>
            <td><?= $resultCotation['code']; ?></td>
            <td><?= $resultCotation['codein']; ?></td>
            <td><?= $resultCotation['name']; ?></td>
            <td><?= $resultCotation['high']; ?></td>
            <td><?= $resultCotation['low']; ?></td>
            <td><?= $resultCotation['varBid']; ?></td>
            <td><?= $resultCotation['pctChange']; ?></td>
            <td><?= $resultCotation['bid']; ?></td>
            <td><?= $resultCotation['ask']; ?></td>
        </tbody>
    </table>

</body>
</html>