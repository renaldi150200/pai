<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('Menu_model');
    }


    public function user()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['usr'] = $this->Admin_model->getUser();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('data/index', $data);
        $this->load->view('templates/user_footer');
    }


    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Menu Management';
        $data['usr'] = $this->Admin_model->getUserById($id);
        $data['status'] = $this->Admin_model->getStatus();

        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('data/edit', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Admin_model->editUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('data');
        }
    }

    public function hapus($id)
    {
        $this->Admin_model->hapusUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete User Success</div>');
        redirect('data/user');
    }
}
