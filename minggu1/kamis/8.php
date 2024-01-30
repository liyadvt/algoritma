<?php 
$kehadiran = 100;
$sakit = 3;
$izin = 2;
$alpa = 0;

echo $sakit || $izin ? 'kehadiran kamu ' . ($kehadiran -= 3 * ($sakit + $izin) ) . '%' : (($alpa) ? 'kehadiran kamu ' . $kehadiran -= 5 * $alpa . '%' : 'kehadiran kamu ' . $kehadiran . '%');
