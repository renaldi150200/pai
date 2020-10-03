<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelompok extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Kelas_model');
    }
    public function index()
    {
        $data['title'] = 'Daftar Kelompok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();

        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('pengajar/index', $data);
        $this->load->view('templates/footer/user_footer');
    }
    public function lihatAnggota($id_kelas)
    {
        $data['title'] = 'Absen Kelompok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['absen'] = $this->db->get_where('absen', ['id_kelas' => $id_kelas])->result_array();
        $data['id_kelas'] = $id_kelas;


        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('pengajar/absen/data_mahasiswa', $data);
        $this->load->view('pengajar/lihatAnggota/index', $data);
        $this->load->view('templates/footer/user_footer');
    }
    public function lihatAmalan($id_kelas)
    {
        $data['title'] = 'Amalan Yaumiyah Kelompok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['pekan'] = $this->Kelas_model->getMaxAmalan($id_kelas);
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();
        $data['absen'] = $this->db->get_where('absen', ['id_kelas' => $id_kelas])->result_array();
        $data['week'] = $this->input->post('pekan', true);
        $data['id_kelas'] = $id_kelas;
        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('pengajar/lihatAmalan/data_amalan', $data);
        $this->load->view('pengajar/lihatAmalan/index', $data);
        $this->load->view('templates/footer/user_footer');
    }
    public function absen($id_kelas)
    {
        $data['title'] = 'Absen Kelompok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();
        $data['absen'] = $this->db->get_where('absen', ['id_kelas' => $id_kelas])->result_array();
        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('pengajar/absen/data_mahasiswa', $data);
        $this->load->view('pengajar/absen/index', $data);
        $this->load->view('templates/footer/user_footer');
    }
    public function hapusAnggota()
    {
        $email = $this->session->userdata('email');
        $id = $this->db->query("SELECT id FROM kelas WHERE email_pengajar='" . $email . "'")->result_array();
        $id_kelas = $id[0]['id'];
        $this->Kelas_model->hapusAnggota();
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Anggota</div>');
        redirect('kelompok/lihatAnggota/' . $id_kelas);
    }
    public function hapusKelas()
    {
        $this->Kelas_model->hapusKelas();
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kelas berhasil di hapus</div>');
        redirect('kelompok');
    }
    public function editKelas()
    {
        $data['title'] = 'Daftar Kelompok';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['email'] = $this->session->userdata('email');
        $email = $this->session->userdata('email');
        $data['kelas'] = $this->db->get_where('kelas', ['email_pengajar' => $email])->result_array();
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header/user_header', $data);
            $this->load->view('templates/sidebar/user_sidebar', $data);
            $this->load->view('templates/topbar/user_topbar', $data);
            $this->load->view('pengajar/index', $data);
            $this->load->view('templates/footer/user_footer');
        } else {
            $this->Kelas_model->editKelas();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas berhasil di update!</div>');
            redirect('kelompok');
        }
    }
}
