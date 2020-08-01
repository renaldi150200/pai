<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_login();
        $this->load->model('Agenda_model');
    }

    public function index()
    {
        $data['title'] = 'Absen Page';
        $data['anggota'] = $this->db->get_where('anggota', ['nim' =>
        $this->session->userdata('nim')])->row_array();
        $data['agenda'] = $this->Agenda_model->getAgendaBantu();
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/absen_sidebar');
        $this->load->view('templates/absen_topbar');
        $this->load->view('absen/index', $data);
        $this->load->view('templates/absen_footer');
        $this->load->view('templates/auth_footer');
    }
    public function tukar()
    {
        $data['title'] = 'Tukar Koin';
        $data['anggota'] = $this->db->get_where('anggota', ['nim' =>
        $this->session->userdata('nim')])->row_array();
        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/absen_sidebar');
        $this->load->view('templates/absen_topbar');
        $this->load->view('absen/tukar', $data);
        $this->load->view('templates/absen_footer');
        $this->load->view('templates/auth_footer');
    }

    public function agenda()
    {
        $data['title'] = 'Absen Page';
        $data['anggota'] = $this->db->get_where('anggota', ['nim' =>
        $this->session->userdata('nim')])->row_array();

        $agenda = $this->db->get_where('agenda', ['kd_agenda' => $this->input->post('kd_agenda')])->row_array();

        $this->form_validation->set_rules('kd_agenda', 'kode', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('jenkel', 'jenkel', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/auth_header', $data);
            $this->load->view('templates/absen_sidebar');
            $this->load->view('templates/absen_topbar');
            $this->load->view('absen/index', $data);
            $this->load->view('templates/absen_footer');
            $this->load->view('templates/auth_footer');
        } else {
            $result = $this->db->get_where('absen', ['kd_agenda' => $this->input->post('kd_agenda'), 'nim' => $this->input->post('nim')]);
            if ($result->num_rows() < 1) {
                if ($this->input->post('kode') == $agenda['kode']) {

                    $this->Agenda_model->inputAbsen();
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Absen Succes</div>');
                    redirect('absen/index');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kode Verifikasi Anda Salah</div>');
                    redirect('absen/index');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Sudah Absen</div>');
                redirect('absen/index');
            }
        }
    }
}
