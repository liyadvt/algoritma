<?php
$date = date('D, d M Y');

function formatIDN($date) {
    $tgl = new DateTime($date);
    $day = date('D');

    switch ($day) {
        case 'Sun':
            $hari = 'Minggu';
            break;
        case 'Mon':
            $hari = 'Senin';
            break;
        case 'Tue':
            $hari = 'Selasa';
            break;
        case 'Wed':
            $hari = 'Rabu';
            break;
        case 'Thu':
            $hari = 'Kamis';
            break;
        case 'Fri':
            $hari = 'Jumat';
            break;
        case 'Sat':
            $hari = 'Sabtu';
            break;
        default:
            $hari = $day; 
            break;
    }

    // $tanggal = date('d M Y');
    return $hari . ', ' . $tgl->format('d') . ' ' . $tgl->format('M') . ' ' . $tgl->format('Y');
}

echo $date;
echo " vs ";
echo formatIDN($date);