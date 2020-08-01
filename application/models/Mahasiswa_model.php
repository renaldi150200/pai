<?php

class Mahasiswa_model extends CI_Model
{

    public function get_data()
    {
        return $this->db->get('user')->result_array();
    }

    public function input_data()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default1.png',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'role_nama' => htmlspecialchars($this->input->post('role_nama', true)),
            'date_created' => time(),
        ];

        $this->db->insert('user', $data);
    }
}
