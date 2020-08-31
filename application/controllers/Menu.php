<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Menu Management';
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['max'] = $this->Menu_model->getMenuMax();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Menu_model->input_menu();
            $this->Menu_model->inputAccess();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added</div>');
            redirect('menu/menu');
        }
    }

    public function subMenu()
    {
        $data['title'] = 'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['subMenu'] = $this->Menu_model->getSubmenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('is_active', 'Active', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Menu_model->input_submenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Sub Menu added</div>');
            redirect('menu/submenu');
        }
    }
    public function editMenu($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Menu Management';
        $data['menu'] = $this->Menu_model->getMenuById($id);

        $this->form_validation->set_rules('menu', 'Menu Name', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/editMenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Menu_model->edit();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu has been updated!</div>');
            redirect('menu');
        }
    }

    public function editSubMenu($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Menu Management';
        $data['menu'] = $this->Menu_model->getSubMenuById($id);

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('url', 'Url ', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/editSubMenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Menu_model->editSubMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu has been updated!</div>');
            redirect('menu/submenu');
        }
    }
    public function hapus($id)
    {
        $this->Menu_model->hapusMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Menu Success</div>');
        redirect('menu');
    }

    public function hapusSubMenu($id)
    {
        $this->Menu_model->hapusSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Delete Sub Menu Success</div>');
        redirect('menu/submenu');
    }
}
