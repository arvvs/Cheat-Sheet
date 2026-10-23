<?php
const VAT = 0.23;

$nazwa = "Mysz Razer";
$netto = "199.00";
$ilosc = "3";

$brutto_sztuka = $netto * (1 + VAT);
$brutto_calosc = $brutto_sztuka * $ilosc;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border>
    <tr>
    <th>Nazwa</th>
    <th>Netto</th>
    <th>Brutto</th>
    <th>Ilość</th>
    <th>Wartość</th>
    </tr>
    <tr>
        <td><?php echo $nazwa; ?></td>
        <td><?php echo number_format($netto, 2, ',', ' ') . " zł"; ?></td>
        <td><?php echo number_format($brutto_sztuka,2 , ',', ' ') . " zł"; ?></td>
        <td><?php echo $ilosc; ?></td>
        <td><?php echo number_format($brutto_calosc,2 , ',', ' ') . " zł"; ?></td>
</tr>
    
    
    
    </table>
</body>
</html>

