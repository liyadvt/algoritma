<?php
//variable a = 5, variable b = 10
//jika dua variable sama maka munculkan angka a,jika tidak munculkan angka terbesar

$a = 5;
$b = 20;

if($a == $b){
    echo  "Kedua variabel sama: " . $a;
} else {
    echo "Variabel yang lebih besar yaitu " . max($a, $b);
    echo ($a > $b) ? "Variabel yang lebih besar yaitu " . $a : "Variabel yang lebih besar yaitu " . $b;
}