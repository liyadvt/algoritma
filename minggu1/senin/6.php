<?php 
 $year = 2024;

 if($year % 4 == 0) {
    echo "tahun $year, bulan februari sampai dengan tanggal 29";
 } else {
    echo "tahun $year, bulan februari sampai dengan tanggal 28";
 }
//seperti yang di ketahui, untuk tahun yang merupakan kelipatan 4,
//pada bulan februari nya terdapat tanggal 29
//buatlah pengkondisian jika tahun merupakan kelipatan 4, maka akan menampilkan: tahun 2024, bulan februari sampai dengan tanggal 29
//selain dari itu, akan menampilkan : tahun 2023, bulan februari sampai dengan tanggal 28 
