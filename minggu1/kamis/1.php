<?php
$usia = 17;

if ($usia >= 6 && $usia <12 ){
    echo  'usia anda adalah '. $usia. ' anda harus tidur sebanyak 10 jam.';
 } else if ($usia > 12 && $usia < 18 ) {
    echo  'usia anda adalah '. $usia. ' anda harus tidur sebanyak 8-9 jam.';
 }  else if ($usia > 18 && $usia < 40 ) {
    echo  'usia anda adalah '. $usia. ' anda harus tidur sebanyak 7-8 jam.';
 } else {
    echo 'masukkan input yang benar';
 } 