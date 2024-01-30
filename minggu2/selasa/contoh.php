<?php 
//buatlah sebuah fungsi yang akan menerima data array berikut serta angka yang di cari. misal ingin mencari angka 100.
//lalu tampilkan angka tersebut ada berapa dan terdapat pada urutan ke berapa. fungsi di panggil sebanyak 2 kali dann angka yang di cari harus berbeda. 
//contoh pemanggilan argument : namaFunc(100; $data)
$data = [90, 100, 80, 70, 100, 100, 80, 90];

function searchNum($searchNum, ...$data){
    $jumlah = 0;
    foreach ($data as $value) {
        if ($value == $searchNum ) {
            $jumlah += 1; 
        }
    }

    return $jumlah;
}

$searchNum = 100;
echo "jumlah angka $searchNum = " . searchNum($searchNum, 100, 80, 90, 100, 100,80);