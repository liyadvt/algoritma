<?php 
//Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan belum kompeten (selain dari itu). 
//Lalu tampilkan berdasarkan kelompok tersebut.
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

foreach ($bilangan as $value) {
    if ($value >= 75 && $value <= 100 ) {
        $kom[] = $value;
    } else {
        $bk[] = $value;
    }
}

echo "<ul> nilai yang kompeten :";
foreach ($kom as $nilai_kom) {
    echo "<li> $nilai_kom </li>";
}
echo "</ul>";

echo "<ul> nilai yang belum kompeten :";
foreach ($bk as $nilai_bk) {
    echo "<li> $nilai_bk </li>";
}
echo "</ul>";
