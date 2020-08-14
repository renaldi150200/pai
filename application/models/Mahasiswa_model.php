<?php

class Mahasiswa_model extends CI_Model
{

    public function get_data()
    {
        return $this->db->get('user')->result_array();
    }

    public function input_data_pengajar()
    {
        if ($this->input->post('role_nama') == 'pelajar') {
            $role = 3;
        } else if ($this->input->post('role_nama') == 'pengajar') {
            $role = 2;
        }
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'nim_pengajar' => htmlspecialchars($this->input->post('nim_pengajar', true)),
            'fakultas' => htmlspecialchars($this->input->post('fakultas', true)),
            'image' => 'default1.png',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => $role,
            'is_active' => 1,
            'role_nama' => htmlspecialchars($this->input->post('role_nama', true)),
            'date_created' => time(),
        ];

        $this->db->insert('user', $data);
    }
    public function input_data_pelajar()
    {
        if ($this->input->post('role_nama') == 'pelajar') {
            $role = 3;
        }
        $data = [
            'nama' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'nim' => htmlspecialchars($this->input->post('nim', true)),
            'fakultas' => htmlspecialchars($this->input->post('fakultas', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => $role,
            'is_active' => 1,
            'role_nama' => htmlspecialchars($this->input->post('role_nama', true))
        ];

        $this->db->insert('mahasiswa', $data);
    }
}
