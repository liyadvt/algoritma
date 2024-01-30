<?php
$lahir = 2004;
$tahun_sekarang = date("Y");
$selisih = $tahun_sekarang - $lahir;

if ($selisih >= 17) {
    echo "Tahun kelahiran $lahir sudah dapat memiliki KTP. Usia sekarang = $selisih";
} else {
    echo "Tahun kelahiran $lahir belum dapat memiliki KTP.  Usia sekarang = $selisih";
}


//apabila tahun skrng dr tahun kelahiran trsrbt berselisih 17 lebih, maka akan menamplkan teks berikut
//tahun kelahiran 2004 sudah dapat memiliki ktp. usia sekarang = 20
//apabila selisih kurang dari 17 maka menampilkan:
//tahun kelahiran 2008 belum dapat memiliki ktp