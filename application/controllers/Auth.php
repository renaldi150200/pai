<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user/myprofile');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Page';
            $this->load->view('templates/landing_header', $data);
            $this->load->view('landing/login');
            $this->load->view('templates/landing_footer');
        } else {
            $this->_login();
        }
    }

    public function absen()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Login Absen Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/absen');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_loginAbsen();
        }
    }

    private function _loginAbsen()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $anggota = $this->db->get_where('anggota', ['email' => $email])->row_array();

        if ($anggota) {
            if ($password == $anggota['password']) {

                $data = [
                    'email' => $anggota['email'],
                    'role_id' => $anggota['role_id'],

                ];
                $this->session->set_userdata($data);
                redirect('absen');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('auth/absen');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth/absen');
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {

            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin_login/dashboard');
                    } elseif ($user['role_id'] == 2) {

                        redirect('user/myprofile');
                    } else {
                        redirect('home/home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                    redirect('landing/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated!</div>');
                redirect('landing/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('landing/login');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('role_nama', 'Role Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!',
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/landing_header');
            $this->load->view('landing/sign-up');
            $this->load->view('templates/landing_script');
        } else {
            $this->Mahasiswa_model->input_data();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('landing/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Kamu Berhasil Keluar !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('landing/login');
    }
    public function logoutAnggota()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth/absen');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
