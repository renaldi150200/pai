<?php

class Kelas_model extends CI_Model
{

    public function input_Kelas($email)
    {

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        function generate_string($input, $strength = 16)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }

        $kode_kelas = generate_string($permitted_chars, 6);

        $data = [
            'nama_kelas' => htmlspecialchars($this->input->post('nama_kelas', true)),
            'kode_kelas' => $kode_kelas,
            'email_pengajar' => $email,
            'desc' => htmlspecialchars($this->input->post('desc', true)),

        ];

        $this->db->insert('kelas', $data);
    }

    public function getKelas($email)
    {
        $this->db->where('email_pengajar', $email);
        return $this->db->get('kelas')->result_array();
    }
    public function getPengumuman($email)
    {
        return $this->db->query("SELECT pengumuman.jenis,pengumuman.date,kelas.nama_kelas,pengumuman.id FROM pengumuman INNER JOIN kelas ON pengumuman.email_pengajar = kelas.email_pengajar")->result_array();
    }
    public function getPengumumanById($id)
    {
        return $this->db->get_where('pengumuman', ['id' => $id])->row_array();
    }
    public function hapus_pengumuman($id)
    {
        $this->db->delete('pengumuman', ['id' => $id]);
    }
    public function edit_pengumuman()
    {
        $tanggal = $this->input->post('tanggal', true);
        $jam = $this->input->post('jam', true);
        $jam_ex = $this->input->post('jam_expired', true);
        $date = $tanggal . ' ' . $jam . ':00';
        $date_expired = $tanggal . ' ' . $jam_ex . ':00';
        $id = $this->input->post('id', true);
        $data = array(
            'jenis' => $this->input->post('jenis', true),
            'id_kelas' => $this->input->post('kelas', true),
            'link' => $this->input->post('link', true),
            'deskripsi' => $this->input->post('deskripsi', true),
            'date' => $date,
            'date_expired' => $date_expired
        );
        $this->db->where('id', $id);
        return $this->db->update('pengumuman', $data);
    }

    public function input_pengumuman($email, $jumlah_pertemuan)
    {
        $tanggal = $this->input->post('tanggal', true);
        $jam = $this->input->post('jam', true);
        $jam_ex = $this->input->post('jam_expired', true);
        $date = $tanggal . ' ' . $jam . ':00';
        $jam_expired = $tanggal . ' ' . $jam_ex . ':00';
        $jumlah_pertemuan += 1;
        $data = [
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'id_kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'link' => htmlspecialchars($this->input->post('link', true)),
            'date' => htmlspecialchars($date),
            'date_expired' => htmlspecialchars($jam_expired),
            'pertemuan_ke' => htmlspecialchars($jumlah_pertemuan),
            'email_pengajar' => htmlspecialchars($email),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),

        ];

        $this->db->insert('pengumuman', $data);
    }

    public function hapusAnggota()
    {
        $this->db->delete('anggota_kelas', ['id_mahasiswa' => htmlspecialchars($this->input->post('id_mahasiswa', true)), 'id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('absen', ['id_mahasiswa' => htmlspecialchars($this->input->post('id_mahasiswa', true)), 'id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('amalan_yaumiyah', ['id_mahasiswa' => htmlspecialchars($this->input->post('id_mahasiswa', true)), 'id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('nilai', ['id_mahasiswa' => htmlspecialchars($this->input->post('id_mahasiswa', true)), 'id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
    }
    public function hapusKelas()
    {
        $this->db->delete('kelas', ['id' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('pengumuman', ['id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('anggota_kelas', ['id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('absen', ['id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('amalan_yaumiyah', ['id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
        $this->db->delete('nilai', ['id_kelas' => htmlspecialchars($this->input->post('id_kelas', true))]);
    }
}
