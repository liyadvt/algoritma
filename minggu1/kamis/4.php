<?php 
$p = 13;
$l = 9;

$luas = $p * $l;

if ($luas >= 0  && $luas <= 90 ){
    echo  'luas rumah anda adalah '. $luas. 'm rumah anda masuk tipe 36.';
 } else if ($luas > 90 && $luas <= 96 ) {
    echo  'luas rumah anda adalah '. $luas. 'm rumah anda masuk tipe 45.';
 }  else if ($luas > 96 && $luas <= 120 ) {
    echo  'luas rumah anda adalah '. $luas. 'm rumah anda masuk tipe 54.';
 } else if ($luas > 120 && $luas < 150 ) {
   echo  'luas rumah anda adalah '. $luas. 'm rumah anda masuk tipe 60.';
}  else if ($luas > 150  ) {
   echo  'luas rumah anda adalah '. $luas. 'm rumah anda masuk tipe  70.';
} else {
    echo 'masukkan input yang benar';
 } 