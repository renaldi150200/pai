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

function SW($pekan, $id_mahasiswa)
{
    $ci = get_instance();
    $shalatWajib = $ci->db->query("SELECT SUM(shalatWajib) as sw FROM amalan_yaumiyah WHERE id_mahasiswa='" . $id_mahasiswa . "' and pekan ='" . $pekan . "'")->result_array();
    $jumlah = $shalatWajib[0]['sw'];
    echo $jumlah;
}
function SD($pekan, $id_mahasiswa)
{
    $ci = get_instance();
    $shalatDhuha = $ci->db->query("SELECT SUM(shalatDhuha) as sd FROM amalan_yaumiyah WHERE id_mahasiswa='" . $id_mahasiswa . "' and pekan ='" . $pekan . "'")->result_array();
    $jumlah = $shalatDhuha[0]['sd'];
    echo $jumlah;
}
function TL($pekan, $id_mahasiswa)
{
    $ci = get_instance();
    $tilawah = $ci->db->query("SELECT SUM(tilawah) as tl FROM amalan_yaumiyah WHERE id_mahasiswa='" . $id_mahasiswa . "' and pekan ='" . $pekan . "'")->result_array();
    $jumlah = $tilawah[0]['tl'];
    echo $jumlah;
}

?>
<i></i>