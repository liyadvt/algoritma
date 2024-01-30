<?php
//terdapat dua variabel yang menyimpan data angka 
$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;

if (is_float($hasil)) { //is_float buat bilangan desimal
    $bulat = round($hasil);
    echo "$angka1 : $angka2 = $hasil, dibulatkan menjadi $bulat";
} else {
    echo "$angka1 : $angka2 = $hasil";
}


//apabila hasil perhitungan bagi antara angka1 dan angka2 merupakan desimal, maka hasil akan dibulatkan 
//tertampil berikut : 10 : 3 = 3,333333 jika dibulatkan menjadi 3
//apabila hasil perhitungan bukan desimal maka : 10 : 5 = 2
