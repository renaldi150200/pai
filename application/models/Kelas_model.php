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
        $date = $tanggal . ' ' . $jam . ':00';
        $id = $this->input->post('id', true);
        $data = array(
            'jenis' => $this->input->post('jenis', true),
            'id_kelas' => $this->input->post('kelas', true),
            'link' => $this->input->post('link', true),
            'deskripsi' => $this->input->post('deskripsi', true),
            'date' => $date
        );
        $this->db->where('id', $id);
        return $this->db->update('pengumuman', $data);
    }

    public function input_pengumuman($email)
    {
        $tanggal = $this->input->post('tanggal', true);
        $jam = $this->input->post('jam', true);
        $date = $tanggal . ' ' . $jam . ':00';

        $data = [
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'id_kelas' => htmlspecialchars($this->input->post('kelas', true)),
            'link' => htmlspecialchars($this->input->post('link', true)),
            'date' => htmlspecialchars($date),
            'email_pengajar' => htmlspecialchars($email),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),

        ];

        $this->db->insert('pengumuman', $data);
    }
}
