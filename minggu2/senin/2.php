<?php 
// buat function mengubah angka ribuan menjadi format "K" dan mengubah jutaan menjadi format "M". contoh 9.500 jadi 9,5K dan 1.700.000 menjadi 1,7M
function formatNumber($number) {
    if ($number >= 0 && $number < 1000) {
        echo $number;
    } elseif ($number > 1000 && $number < 1000000) {
        echo number_format($number / 1000, 1) . 'K';
    } else {
        echo number_format($number / 1000000, 1) . 'M';
    }
}

formatNumber(10);  
echo "<br>";
formatNumber(1000);  
echo "<br>";
formatNumber(1700000);