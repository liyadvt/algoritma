<?php 
 // tampilkan angka yang bisa dibagi angka 4 dan 5, ari rentang 1-50

for ($i=1; $i < 50; $i++){
    if ($i % 4 == 0 && $i % 5 == 0 ) {
        echo " angka yang bisa di bagi 4 atau 5 adalah $i  <br>";
    }
}