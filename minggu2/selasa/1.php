<?php 
//buatlah fungsi yang menghasilkan sebuah array dari banyak data yang di terima. data yang di kirim berbentuk stringg nama nama jurusan. 
//jika nama jurusan ada yang di panggil duplikat, maka di masukkan ke array hanya salah satu saja yang (capslock).
//contoh pemanggilan argumentnya : namafunc("PPLG", "HTL", "KLN", "DKV", "pplg") maka akan menghasilkan arrau ["PPLG", "HTL", "KLN", "DKV"]


function createArray(...$jurusan) {
    $jur = array_unique(array_map('strtoupper', $jurusan));
    return array_values($jur);
}

print_r(createArray("pplg", "HTL", "KLN", "PMN", "pplg", "htl"));
//output hanya yang caplock yang keluar jika kedua tipe yang sama tidak capslock maka keduanya tidak di tampilkan
//jadi outputnya [ "HTL", "KLN", "DKV"]

