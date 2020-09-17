<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Agenda_model');
    }

    public function taklim()
    {
        $data['title'] = 'Taklim';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['agenda'] = $this->Agenda_model->getAgenda();
        $this->load->view('templates/header/user_header', $data);
        $this->load->view('templates/sidebar/user_sidebar', $data);
        $this->load->view('templates/topbar/user_topbar', $data);
        $this->load->view('agenda/index', $data);
        $this->load->view('templates/footer/user_footer');
    }
    public function chart()
    {
        $data['title'] = 'Chart';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['agenda'] = $this->Agenda_model->getAgenda();
        $this->load->view('agenda/chart', $data);
    }

    public function tmbhAgenda()
    {
        $data['title'] = 'Taklim';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('kd_agenda', 'Kode Agenda', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tema', 'Tema', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header/user_header', $data);
            $this->load->view('templates/sidebar/user_sidebar', $data);
            $this->load->view('templates/topbar/user_topbar', $data);
            $this->load->view('agenda/index', $data);
            $this->load->view('templates/footer/user_footer');
        } else {
            $this->Agenda_model->inputAgenda();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Agenda added</div>');
            redirect('agenda/taklim');
        }
    }

    public function upload()
    {
        $result = $this->db->get_where('agenda_bantu', ['id' => $this->input->post('id')]);
        if ($result->num_rows() < 1) {

            $this->Agenda_model->inputAgendaBantu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Agenda is Uploded</div>');
            redirect('agenda/taklim');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Agenda Sudah terupload</div>');
            redirect('agenda/taklim');
        }
    }

    public function hapus($id)
    {
        $this->Agenda_model->hapusAgenda($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Agenda Success</div>');
        redirect('agenda/taklim');
    }
    public function selesai($id)
    {
        $this->Agenda_model->AgendaSelesai($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Agenda Sudah Selesai</div>');
        redirect('agenda/taklim');
    }
}
