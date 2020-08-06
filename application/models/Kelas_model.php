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

    public function getKelas()
    {

    }

}
