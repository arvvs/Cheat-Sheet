<?php
const VAT = 0.23;

$nazwa = "Mysz Razer";
$netto = "199.00";
$ilosc = "3";
$rabat_procent = 10;
$lata_splaty = 10;

$brutto_sztuka = $netto * (1 + VAT);
$brutto_calosc = $brutto_sztuka * $ilosc;
$wartosc_rabatu = round($brutto_calosc * $rabat_procent / 100, 2);
$wartosc_po_rabacie = round($brutto_calosc - $wartosc_rabatu, 2);
$liczba_rat = $lata_splaty * 12;
$rata_miesieczna = round($wartosc_po_rabacie / $liczba_rat, 2);


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
    <th>Wartość zamówienia</th>
    <th>Rabat (<?php echo $rabat_procent; ?>%)</th>
    <th>Wartość po rabacie</th>
    <th>Rata miesięczna (<?php echo $lata_splaty; ?> lat)</th>
    </tr>
    <tr>
        <td><?php echo $nazwa; ?></td>
        <td><?php echo number_format($netto, 2, ',', ' ') . " zł"; ?></td>
        <td><?php echo number_format($brutto_sztuka,2 , ',', ' ') . " zł"; ?></td>
        <td><?php echo $ilosc; ?></td>
        <td><?php echo number_format($brutto_calosc,2 , ',', ' ') . " zł"; ?></td>
        <td><?php echo number_format($wartosc_rabatu, 2, ',', ' ') . " zł"; ?></td>
        <td><?php echo number_format($wartosc_po_rabacie, 2, ',', ' ') . " zł"; ?></td>
        <td><?php echo number_format($rata_miesieczna, 2, ',', ' ') . " zł"; ?></td>
</tr>
    
    
    
    </table>
</body>
</html>

