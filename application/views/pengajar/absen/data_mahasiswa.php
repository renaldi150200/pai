<?php
function nim($id_mahasiswa)
{
    $ci = get_instance();
    $kode = $ci->db->query("SELECT nim FROM mahasiswa WHERE id='" . $id_mahasiswa . "'")->result_array();
    $nim = $kode[0]['nim'];
    echo $nim;
}
function nama($id_mahasiswa)
{
    $ci = get_instance();
    $kode = $ci->db->query("SELECT nama FROM mahasiswa WHERE id='" . $id_mahasiswa . "'")->result_array();
    $nama = $kode[0]['nama'];
    echo $nama;
}

function hadir($kehadiran)
{
    if ($kehadiran == '1') {
        $icon = '<i class="far fa-check-circle" style="color:MediumSeaGreen;"></i>';
    } else {
        $icon = '<i class="far fa-times-circle" style="color:tomato;"></i>';
    }

    echo $icon;
}

?>
<i></i>