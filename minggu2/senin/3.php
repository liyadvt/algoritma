<?php
// Buatlah sebuah fungsi yang akan membandingkan dua buah string nama.
// Lalu, menampilkan jumlah karakter dari dua nama tersebut dan menampilkan
// nama yang memiliki jumlah karakter lebih banyak serta selisihnya.
function perbandingan($nama1, $nama2) {
    // Menghitung jumlah karakter tanpa memperhitungkan spasi
    $panjang1 = strlen(str_replace(' ', '', $nama1));
    $panjang2 = strlen(str_replace(' ', '', $nama2));

    if ($panjang1 > $panjang2) {
        $selisih = $panjang1 - $panjang2;
        echo "$nama1 memiliki karakter lebih banyak dari $nama2 : dengan selisih karakter $selisih.";
    } elseif ($panjang1 < $panjang2) {
        $selisih = $panjang2 - $panjang1;
        echo "$nama2 memiliki karakter lebih banyak dari $nama1 : dengan selisih karakter $selisih.";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.";
    }
}

perbandingan("Si ti Nur", "Xu Min");
// Output: $nama1 memiliki karakter lebih banyak dari $nama2 : dengan selisih karakter .....