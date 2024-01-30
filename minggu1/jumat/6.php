<?php 
// Buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang sama antara kedua variabel. 
// Dan kelompok kedua bilangan selain itu (yang tidak sama / yang hanya terdapat disalah satu variabel saja)
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$sama = array_intersect($bil2, $bil1);
$beda = array_unique(array_merge($bil1, $bil2));

echo "<ol> Kelompok bilangan yang sama: ";
foreach ($sama as $value) {
    echo "<li> ". $value . "<br></li>";
}
echo "</ol>";

echo "<ol> Kelompok bilangan yang beda: ";
foreach ($beda as $value) {
    echo "<li>". $value . "<br></li>";
}
echo "</ol>";



