<?php 
$NG = 15000;
$AB = 20000;
$NK = 25000;
$AJ = 8000;
$ET = 3000;
$EJ = 5000;

$diskon1 = 0.02; //SENIN
$diskon2 = 0.05; //JM
$hari = Date('D');

$Total_beli = (($NG * 2) + ($NK * 2) + ($AB * 1));

if($hari == "Mon"){
    $harga = $Total_beli - (($Total_beli * $diskon1)); 
} else if ($hari == "Fri")  {
    $harga = $Total_beli - ($Total_beli * $diskon2);
} else  {
    $harga = $Total_beli;
}

echo "Harga yang harus di bayar adalah Rp. ". number_format($harga,0,".",".");