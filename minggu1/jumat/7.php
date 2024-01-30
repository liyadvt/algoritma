<?php 
// gabungkan dua array tersebut, lalu untuk nilai yang sama maka akan diambil hanya salah satunya saja, setelah itu tampilkan bilangan secara terurut dari terbesar ke terkecil. Hasil akan berisi angka-angka berikut :

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$hasil = array_unique(array_merge($bil1, $bil2));
arsort($hasil);

echo "<ol> Urutan nilai dari terbesar ke terkecil dari 2 array yang digabungkan adalah : ";
foreach ($hasil as $bil) {
    echo "<li> ". $bil . "<br></li>";
}
echo "</ol>";