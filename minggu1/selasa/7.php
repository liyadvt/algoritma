<?php
//rumah makan beni mengadakan program diskon ssebesar 5% tiap pembelian hari selasa. 
//dan setiap pembelian 100.000 mendapat diskon sebesar 7%

//hitung uang yang harus di bayar jika total pembelian 130.000 di hari ini

$diskon1 = 0.07;
$diskon2 = 0.05;
$Total_beli = 130000;
$hari = Date('D');

if($Total_beli >= 100000){
    if($hari == "Tue"){
        $harga = $Total_beli - (($Total_beli * $diskon1) + ($Total_beli * $diskon2));
    } else {
        $hargaSetDiskon = $Total_beli - ($Total_beli * $diskon1);
        $harga = $hargaSetDiskon;
    }
    echo "Harga yang harus di bayar adalah Rp. ". number_format($harga,0,".",".");
} else if ($Total_beli <= 100000 && $hari == "Tue")  {
    $hargaSelasa = $Total_beli - ($Total_beli * $diskon2);
    echo "Harga yang harus di bayar adalah Rp. ". number_format($hargaSelasa,0,".",".");
} else  {
    echo "tidak dapat diskon an harga belanja anda adalah Rp. ". number_format($Total_beli,0,".",".") ;
}
