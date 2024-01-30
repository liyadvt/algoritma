<?php 
$berat = 40;
$tinggi = 170;

$tinggi1 = $tinggi / 100;
$tinggi2 = $tinggi1 * $tinggi1;

$IMT = $berat / $tinggi2;

if ($IMT >= 0 && $IMT <= 18.5 ){
    echo  'IMT anda adalah '. $IMT. ' anda masuk kategori kurang berat badan.';
 } else if ($IMT > 18.5 && $IMT <= 22.9 ) {
    echo  'IMT anda adalah '. $IMT. ' anda masuk kategori normal';
 }  else if ($IMT > 22.9 && $IMT <= 24.9 ) {
    echo  'IMT anda adalah '. $IMT. ' anda masuk kategori berat badan lebih';
 } else  if ($IMT >= 25){
    echo 'IMT anda adalah '. $IMT. ' anda masuk kategori obsesitas';
 } else {
    echo 'masukan input yang sesuai !';
 }