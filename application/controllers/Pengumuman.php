<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Pengumuman';
        $email = $this->session->userdata('email');
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['id_kelas'] = $this->Kelas_model->getKelas($email);
        $data['pengumuman'] = $this->Kelas_model->getPengumuman($email);


        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/tanggal/format_tanggal');
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('pengumuman/index', $data, $email);
        $this->load->view('templates/footer/user_footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pengumuman';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Pengumuman';
        $email = $this->session->userdata('email');
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['id_kelas'] = $this->Kelas_model->getKelas($email);
        $data['pengumuman'] = $this->Kelas_model->getPengumuman($email);

        $this->db->select_max('id');
        $jumlah_pertemuan =  $this->db->get('user_role')->result_array();
        $this->db->where('email_pengajar', $email);
        $kelas = $this->db->get('kelas')->result_array();
        if (!$kelas) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Buat Kelas Terlebih Dahulu</div>');
            redirect('pengumuman');
        } else {


            $this->form_validation->set_rules('jenis', 'Jenis', 'required');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
            $this->form_validation->set_rules('jam', 'jam', 'required');
            $this->form_validation->set_rules('jam_expired', 'jam_expired', 'required');
            $this->form_validation->set_rules('link', 'link', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header/user_header', $data);
                $this->load->view('templates/sidebar/user_sidebar', $data);
                $this->load->view('templates/topbar/user_topbar', $data);
                $this->load->view('pengumuman/tambah', $data);
                $this->load->view('templates/footer/user_footer');
            } else {
                $this->Kelas_model->input_pengumuman($email, $jumlah_pertemuan);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman Baru Telah Di Upload</div>');
                redirect('pengumuman');
            }
        }
    }
    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $email = $this->session->userdata('email');
        $data['title'] = 'Edit Pengumuman';
        $data['id_kelas'] = $this->Kelas_model->getKelas($email);
        $data['pengumuman'] = $this->Kelas_model->getPengumumanById($id);

        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');
        $this->form_validation->set_rules('jam_expired', 'jam_expired', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header/user_header', $data);
            $this->load->view('templates/sidebar/user_sidebar', $data);
            $this->load->view('templates/topbar/user_topbar', $data);
            $this->load->view('pengumuman/edit', $data);
            $this->load->view('templates/footer/user_footer');
        } else {
            $this->Kelas_model->edit_pengumuman();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman telah di Update!</div>');
            redirect('pengumuman');
        }
    }


    public function hapus($id)
    {
        $this->Kelas_model->hapus_pengumuman($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pengumuman telah di Hapus</div>');
        redirect('pengumuman');
    }
}
