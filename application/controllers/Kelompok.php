<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Daftar Kelompok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('pengajar/index', $data);
        $this->load->view('templates/user_footer');
    }
}