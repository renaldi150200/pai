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
    public function anggota($departemen)
    {
        $data['title'] = 'Data Anggota';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        if ($departemen == 'SPK') {
            $data['anggota'] = $this->Admin_model->getAnggotaSPK();
        } else if ($departemen == 'MSI') {
            $data['anggota'] = $this->Admin_model->getAnggotaMSI();
        } else if ($departemen == 'BUD') {
            $data['anggota'] = $this->Admin_model->getAnggotaBUD();
        } else if ($departemen == 'KEMUSLIMAHAN') {
            $data['anggota'] = $this->Admin_model->getAnggotaKEMUS();
        } else {
            $data['anggota'] = $this->Admin_model->getAnggota();
        }


        $data['departemen'] = ['', 'SPK', 'KPSDM', 'MSI', 'BUD', 'Kemuslimahan'];
        $data['status'] = ['', 'AKTIF', 'SEMI AKTIF', 'TIDAK AKTIF'];
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('data/anggota', $data);
        $this->load->view('templates/user_footer');
    }
    public function tmbhAnggota()
    {
        $data['title'] = 'Data Anggota';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('departemen', 'Departemen', 'required');
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('data/anggota', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Admin_model->input_anggota();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Anggota added</div>');
            redirect('data/anggota');
        }
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
        redirect('data');
    }

    public function hapusAnggota($id)
    {
        $this->Admin_model->hapusAnggota($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Anggota Success</div>');
        redirect('data/anggota');
    }
}
