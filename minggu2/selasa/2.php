<?php 
//buat sebuah fungsi yang akan menghitung lembar uang rupiah 
//contoh : 140.500
//outputnya
// lembar rupiah :
// - Rp. 100.000 : 1
// - Rp. 20.000  : 2
// - Rp. 500     : 1

function rupiah($number) {
    $jumlahRupiah = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    echo "<ol> Lembar Uang : ";
    foreach ($jumlahRupiah as $nilai) {
        $lembar = floor($number / $nilai);
        $number %= $nilai;

        if ($lembar > 0) {
            echo "<li> Rp. $nilai : $lembar </li>";
        }
    }
    echo "</ol>";
}

rupiah(570000);

