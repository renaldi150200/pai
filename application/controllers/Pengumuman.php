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
        // Get Data Pertemuan
        $kode = $this->db->query("SELECT id FROM kelas WHERE email_pengajar='" . $email . "'")->result_array();
        $kode_kelas = $kode[0]['id'];
        $count = $this->db->query("SELECT COUNT(id) AS jumlah FROM pengumuman WHERE id_kelas='" . $kode_kelas . "' AND jenis='pertemuan' ")->result_array();
        $jumlah_pertemuan = $count[0]['jumlah'];
        // 

        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('jam', 'jam', 'required');
        $this->form_validation->set_rules('jam_expired', 'jam_expired', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/format_tanggal');
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('pengumuman/index', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Kelas_model->input_pengumuman($email, $jumlah_pertemuan);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman Baru Telah Di Upload</div>');
            redirect('pengumuman');
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
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('pengumuman/edit', $data);
            $this->load->view('templates/user_footer');
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
