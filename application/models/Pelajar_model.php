<?php

class Pelajar_model extends CI_Model
{

    public function input_amalanPekanan($id_mahasiswa, $id_kelas)
    {
        $tanggal = date('Y-m-d');

        $data = [
            'id_mahasiswa' => htmlspecialchars($id_mahasiswa),
            'id_kelas' => htmlspecialchars($id_kelas),
            'shalatWajib' => htmlspecialchars($this->input->post('shalatWajib', true)),
            'shalatDhuha' => htmlspecialchars($this->input->post('shalatDhuha', true)),
            'tilawah' => htmlspecialchars($this->input->post('tilawah', true)),
            'date' => htmlspecialchars($tanggal),
        ];

        $this->db->insert('amalan_yaumiyah', $data);
    }

    public function daftarKelas($id_mahasiswa)
    {
        $data = [
            'id_mahasiswa' => htmlspecialchars($id_mahasiswa),
            'id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))
        ];

        $this->db->insert('anggota_kelas', $data);
        $this->db->insert('absen', $data);
        $this->db->insert('nilai', $data);
    }

    public function update_absen($id_mahasiswa)
    {
        $absen = $this->input->post('absen');
        $pertemuan = 'pertemuan_' . $absen;
        $this->db->set($pertemuan, '1');
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        return $this->db->update('absen');
    }
}
