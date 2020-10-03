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
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Isi NIM terlebih dahulu',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Isi Password terlebih dahulu',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header/landing_header_auth');
            $this->load->view('landing/log-in');
            $this->load->view('templates/landing_script');
        } else {
            $this->_login();
        }
    }



    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        $mahasiswa = $this->db->get_where('mahasiswa', ['email' => $email])->row_array();

        if ($user || $mahasiswa) {

            if ($user['is_active'] == 1 || $mahasiswa['is_active'] == 1) {
                if (password_verify($password, $user['password']) || password_verify($password, $mahasiswa['password'])) {

                    if ($user) {
                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id'],
                        ];
                    } elseif ($mahasiswa) {
                        $data = [
                            'email' => $mahasiswa['email'],
                            'role_id' => $mahasiswa['role_id'],
                        ];
                    }

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin_login/dashboard');
                    } elseif ($user['role_id'] == 2) {
                        redirect('user/myprofile');
                    } elseif ($mahasiswa['role_id'] == 3 || $user['role_id'] == 3) {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Salah Password!</div>');
                    redirect('landing/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email has not been activated!</div>');
                redirect('landing/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Anda Belum Terdaftar!</div>');
            redirect('landing/login');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }
        $data['fakultas'] = $this->db->query("SELECT * FROM fakultas ")->result_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Nama Wajib diisi !']);
        $this->form_validation->set_rules('role_nama', 'Role Nama', 'required');

        // Kondisi user role pelajar dan pengajar
        if ($this->input->post('role_nama') == 'pelajar') {

            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[mahasiswa.email]|is_unique[user.email]', [
                'is_unique' => 'Email ini sudah terdaftar !', 'required' => 'Email Wajib diisi !'
            ]);
            $this->form_validation->set_rules('nim', 'NIM', 'required|trim|is_unique[mahasiswa.nim]', [
                'is_unique' => 'NIM ini sudah terdaftar !', 'required' => 'NIM Wajib diisi !'
            ]);
        } else if ($this->input->post('role_nama') == 'pengajar') {

            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]|is_unique[mahasiswa.email]', [
                'is_unique' => 'Email ini sudah terdaftar !', 'required' => 'Email Wajib diisi !'
            ]);
            $this->form_validation->set_rules('nim', 'NIM', 'required|trim|is_unique[user.nim_pengajar]', [
                'is_unique' => 'NIM ini sudah terdaftar !', 'required' => 'NIM Wajib diisi !'
            ]);
        }

        $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak  sama!',
            'min_length' => 'Password Minimal terdiri dari 6 huruf!',
            'required' => 'Password Wajib diisi !'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header/landing_header_auth');
            $this->load->view('landing/sign-up', $data);
            $this->load->view('templates/landing_script');
        } else {
            if ($this->input->post('role_nama') == 'pelajar') {

                $this->Mahasiswa_model->input_data_pelajar();
            } else if ($this->input->post('role_nama') == 'pengajar') {

                $this->Mahasiswa_model->input_data_pengajar();
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun anda sudah jadi. Silahkan Login</div>');
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

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
