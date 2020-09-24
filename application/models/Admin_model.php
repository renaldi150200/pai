<?php

class Admin_model extends CI_Model
{

    public function index()
    {
        //
    }

    public function role()
    {
        return $this->db->get_where("user_role")->result_array();
    }

    public function getRoleMax()
    {
        $this->db->select_max('id');
        return  $this->db->get('user_role')->result_array();
    }

    public function roleAccess($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }

    public function edit()
    {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $this->db->set('name', $name);
        $this->db->where('email', $email);
        return $this->db->update('user');
    }
    public function editnamaFoto()
    {
        $name = $this->input->post('nama');
        $email = $this->input->post('email1');
        $this->db->set('name', $name);
        $this->db->where('email', $email);
        return $this->db->update('user');
    }
    public function input_anggota()
    {
        $data = [
            'nim'  => htmlspecialchars($this->input->post('nim', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'departemen' => htmlspecialchars($this->input->post('departemen', true)),
            'status' => htmlspecialchars($this->input->post('status', true)),
            'angkatan' => htmlspecialchars($this->input->post('angkatan', true))

        ];

        $this->db->insert('anggota', $data);
    }
    public function inputRole()
    {
        $data = [
            'id'  => htmlspecialchars($this->input->post('id_role', true)),
            'role' => htmlspecialchars($this->input->post('role', true)),
        ];

        $this->db->insert('user_role', $data);
    }

    public function upload_image()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $old_image = $data['user']['image'];
        if ($old_image != 'default1.png') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');

        return $this->db->set('image', $new_image);
    }
    public function getUser()
    {
        $query = " SELECT `user`.*, `status`.`nama_role` 
        FROM `user` INNER JOIN `status` 
        ON `user`.`role_id` = `status`.`role_id`
        ";

        return $this->db->query($query)->result_array();
    }
    public function getStatus()
    {
        return $this->db->get('status')->result_array();
    }

    public function getAnggota()
    {
        return $this->db->get('anggota')->result_array();
    }
    public function hapusRole()
    {
        $this->db->delete('user_role', ['id' => $this->input->post('id_role')]);
    }
    public function hapusUser($kelas)
    {
        $this->db->delete('user', ['id' =>  $this->input->post('id', true)]);
        foreach ($kelas as $id_kelas) :
            $this->db->delete('kelas', ['id' =>  $id_kelas['id']]);
            $this->db->delete('anggota_kelas', ['id_kelas' =>  $id_kelas['id']]);
            $this->db->delete('amalan_yaumiyah', ['id_kelas' =>  $id_kelas['id']]);
            $this->db->delete('pengumuman', ['id_kelas' =>  $id_kelas['id']]);
            $this->db->delete('absen', ['id_kelas' =>  $id_kelas['id']]);
            $this->db->delete('nilai', ['id_kelas' =>  $id_kelas['id']]);
        endforeach;
    }
    public function hapusAnggota($id)
    {
        $this->db->delete('anggota', ['id' => $id]);
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function getKelasById($email)
    {
        return $this->db->get_where('kelas', ['email_pengajar' => $email])->row_array();
    }
    public function editUser()
    {
        $data = array(
            'id' => $this->input->post('id', true),
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'role_id' => $this->input->post('role_id', true),
            'password' => $this->input->post('password', true),
            'is_active' => $this->input->post('is_active', true),
            'date_created' => $this->input->post('date_created', true),

        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
    public function editRole()
    {
        $id = $this->input->post('id_role');
        $role = $this->input->post('role');
        $this->db->set('role', $role);
        $this->db->where('id', $id);
        return $this->db->update('user_role');
    }
}
