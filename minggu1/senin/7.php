<?php 
// --terdapat satu variabel yang memiliki value -5. tentukan lah apakah variable tersebut masuk kelompok
// kolom bilangan bulat positif, bulat negatif, atau bilangan cacah, dan apakah variabel tersebut merupakan 
// variabel kelipatan 3

$a = 0;
if ($a > 0) {
    echo "$a adalah bilangan bulat positif dan";
} elseif ($a < 0) {
    echo "$a adalah bilangan bulat negatif dan";
} else {
    echo "$a adalah bilangan cacah dan";
}

if ($a % 3 == 0) {
    echo " $a merupakan kelipatan 3.";
} else {
    echo " $a bukan kelipatan 3.";
}

