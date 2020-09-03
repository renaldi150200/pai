<?php

class Pelajar_model extends CI_Model
{

    public function input_amalanPekanan($id_mahasiswa, $id_kelas)
    {
        $tanggal = date('Y-m-d');

        $data = [
            'id_mahasiswa' => htmlspecialchars($id_mahasiswa),
            'id_kelas' => htmlspecialchars($id_kelas),
            // 'puasa_sunnah' => htmlspecialchars($this->input->post('shaumSunnah', true)),
            // 'ket_puasa_sunnah' => htmlspecialchars($this->input->post('ket_shaumSunnah', true)),
            'shalatWajib' => htmlspecialchars($this->input->post('shalatWajib', true)),
            'ket_shalatWajib' => htmlspecialchars($this->input->post('ket_shalatWajib', true)),
            'shalatTahajjud' => htmlspecialchars($this->input->post('shalatTahajjud', true)),
            'ket_shalatTahajjud' => htmlspecialchars($this->input->post('ket_shalatTahajjud', true)),
            'shalatDhuha' => htmlspecialchars($this->input->post('shalatDhuha', true)),
            'ket_shalatDhuha' => htmlspecialchars($this->input->post('ket_shalatDhuha', true)),
            'dzikirPagi' => htmlspecialchars($this->input->post('dzikirPagi', true)),
            'ket_dzikirPagi' => htmlspecialchars($this->input->post('ket_dzikirPagi', true)),
            'dzikirPetang' => htmlspecialchars($this->input->post('dzikirPetang', true)),
            'ket_dzikirPetang' => htmlspecialchars($this->input->post('ket_dzikirPetang', true)),
            'tilawah' => htmlspecialchars($this->input->post('tilawah', true)),
            'ket_tilawah' => htmlspecialchars($this->input->post('ket_tilawah', true)),
            'istighfar' => htmlspecialchars($this->input->post('istighfar', true)),
            'ket_istighfar' => htmlspecialchars($this->input->post('ket_istighfar', true)),
            'birulWalidain' => htmlspecialchars($this->input->post('birulWalidain', true)),
            'ket_birulWalidain' => htmlspecialchars($this->input->post('ket_birulWalidain', true)),
            'nontonKajian' => htmlspecialchars($this->input->post('menontonKajian', true)),
            'ket_nontonKajian' => htmlspecialchars($this->input->post('ket_menontonKajian', true)),
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
    }
}
