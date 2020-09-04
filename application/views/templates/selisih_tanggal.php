<?php
function button_absen($absen_buka, $absen_ex)
{

    date_default_timezone_set('Asia/Makassar');
    $tanggal = date('d-m-Y H:i:s'); // 20-01-2017 05:10:15
    $waktu_awal        = strtotime($absen_buka);
    $waktu_awal_ex        = strtotime($absen_ex);
    $waktu_akhir    = strtotime($tanggal); // bisa juga waktu sekarang now()

    $jam_buka = date('H:i', strtotime($absen_buka));
    //menghitung selisih dengan hasil detik
    $diff    = $waktu_akhir - $waktu_awal;
    $diff_ex = $waktu_awal_ex - $waktu_akhir;


    if ($diff >= 0) {
        if ($diff_ex >= 0) {
            $button = '<button type="submit" class="btn btn-primary mt-1">Absen</button>';
        } else {
            $button = '<button type="submit" class="btn btn-danger mt-1" disabled>Absen Expired</button>';
        }
    } else {
        $button = '<button type="submit" class="btn btn-dark mt-1" disabled>Absen dibuka pada jam ' . $jam_buka . '</button>';
    }
    echo $button;
}

?>
<i></i>