<?php
//nilai minimum mata pelajaran
$mtk = 80;
$ing = 90;
$ind = 90;

//minimum rata rata 85
$rata = ($mtk + $ing + $ind) / 3;

if ($mtk >= 87 && $ing >= 85 && $ind >= 87 && $rata >= 85) {
    echo "Anda diterima!";
} else {
    echo "Maaf, anda belum diterima";
}

