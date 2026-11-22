<?php

function formaterPrix(int $montant): string
{

    return number_format($montant, 0, ',', ' ') . " FCFA";
}

$rizPrice = 18500;
$qtyRiz = 2;
$huilePrice = 1500;
$qtyHuile = 3;
$savonPrice = 400;
$qtySavon = 5;

$totalRiz = $rizPrice * $qtyRiz;
$totalHuile = $huilePrice * $qtyHuile;
$totalSavon = $savonPrice * $qtySavon;

$total = $totalRiz + $totalHuile + $totalSavon;

$remise = 0;
$totalPay = 0;
if ($total > 20000) {
    $remise = $total * 0.05;
    $totalPay = $total - $remise;
}

// display ticket informations

echo 'Total riz= ' . formaterPrix($totalRiz) . "\n";

echo 'Total huile= ' . formaterPrix($totalHuile) . "\n";
echo 'Total savon= ' . formaterPrix($totalSavon) . "\n";
if ($remise != 0) {
    echo "remise = 5% \n";
}
echo 'Total= ' . formaterPrix($total) . "\n";
echo 'Remise= ' . $remise . "\n";
echo 'Total a payee= ' . $totalPay . "\n";

function etatStock(int $stock): string
{
    if ($stock == 0) {
        return "Rupture";
    } elseif ($stock >= 1 && $stock <= 4) {
        return "Stock faible";
    } else {
        return "Disponible";
    }
}
echo etatStock(0) . "\n";
echo etatStock(3) . "\n";
echo etatStock(5) . "\n";
echo etatStock(120) . "\n";






?>