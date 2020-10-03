<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{


    public function index()
    {
        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($this->session->userdata('email')) {
            if ($user) {

                redirect('user/myprofile');
            } else {
                redirect('home');
            }
        }
        $this->load->view('templates/header/landing_header');
        $this->load->view('landing/index');
        $this->load->view('templates/landing_script');
    }

    public function login()
    {
        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($this->session->userdata('email')) {
            if ($user) {

                redirect('user/myprofile');
            } else {
                redirect('home');
            }
        }
        $this->load->view('templates/header/landing_header_auth');
        $this->load->view('landing/log-in');
        $this->load->view('templates/landing_script');
    }
    public function register()
    {
        $email = $this->session->userdata('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($this->session->userdata('email')) {
            if ($user) {

                redirect('user/myprofile');
            } else {
                redirect('home');
            }
        }
        $data['fakultas'] = $this->db->query("SELECT * FROM fakultas ")->result_array();
        $this->load->view('templates/header/landing_header_auth');
        $this->load->view('landing/sign-up', $data);
        $this->load->view('templates/landing_script');
    }
}
