<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Menu_model');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer/user_footer');
    }

    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->Admin_model->role();
        $data['max'] = $this->Admin_model->getRoleMax();
        $this->form_validation->set_rules('role', 'Role Name', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header/user_header', $data);
            $this->load->view('templates/sidebar/user_sidebar', $data);
            $this->load->view('templates/topbar/user_topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer/user_footer');
        } else {
            $this->Admin_model->inputRole();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Role baru telah ditambahkan</div>');
            redirect('admin_login/role');
        }
    }
    public function editRole()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->Admin_model->role();
        $this->form_validation->set_rules('role', 'Role Name', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header/user_header', $data);
            $this->load->view('templates/sidebar/user_sidebar', $data);
            $this->load->view('templates/topbar/user_topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer/user_footer');
        } else {
            $this->Admin_model->editRole();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Role baru telah di edit</div>');
            redirect('admin_login/role');
        }
    }
    public function hapusRole()
    {
        $this->Admin_model->hapusRole();
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus User Role Berhasil</div>');
        redirect('admin_login/role');
    }
    public function roleAccess($role_id)
    {
        $data['title'] = 'RoleAccess';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['role'] = $this->Admin_model->roleAccess($role_id);
        $data['menu'] = $this->Menu_model->getMenu();
        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer/user_footer');
    }

    public function change_access()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
}
