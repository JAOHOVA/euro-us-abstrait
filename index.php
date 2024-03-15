<?php

require_once 'Product.php';

$hardDrive = new EUProduct('Disque dur', 140.00);
$UShardDrive = new USProduct('Hard Drive', 140.00);

echo $hardDrive->formatPrice(); // Affiche 140.00 €
echo '<br>';
echo $UShardDrive->formatPrice(); // Affiche $140.00