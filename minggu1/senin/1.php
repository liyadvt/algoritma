<?php
$angka = "22";

// if ($angka === '22'){
//     echo "'$angka' merupakan teks";
// } else {
//     echo " $angka merupakan angka";
// }  

if (is_string($angka)){ //is_string menghasilkan tipe data 1/0 (true or false)
        echo "\"$angka\" merupakan teks";
    } else {
        echo " $angka merupakan angka";
    }  
    

