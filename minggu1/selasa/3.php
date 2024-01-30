<?php
// mini market eko menjual berbagai kebutuhan. setiap pelanggan yang terbelanja lebih dari 100.000 akan
//mendapatkan voucher potongan harga sebesar 10.000

//jika andi berbelanja sebesar 180.000 apa yang akan didapatkan Andi.

$total_belanja = 180000;
$voucher = 10000;

if($total_belanja >= 100000){
    $total_diskon = $total_belanja - $voucher;
    echo "Selamat! anda mendapatkan voucher sebesar ".number_format($voucher,0,".","."). " total belanjaan anda adalah ". number_format($total_diskon,0,".",".");
} else {
    echo "Total belanjaan anda adalah ". number_format($total_belanja,0,".",".");
}

