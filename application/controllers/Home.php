<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kelas_model');
    }
    public function index()
    {
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/user_footer');
    }
    public function home()
    {
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/home', $data);
        $this->load->view('templates/home_footer');
        $this->load->view('templates/landing_script');
    }
    public function evaluasi()
    {
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();
        $anggota = $this->db->get_where('anggota_kelas', ['email' => $email])->result_array();
        if (!$anggota) {
            $data['anggota'] = 'false';
        } else {
            $data['anggota'] = 'true';
        }
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/evaluasi', $data);
        $this->load->view('templates/home_footer');
        $this->load->view('templates/landing_script');
    }

}
