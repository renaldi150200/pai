<?php

class Menu_model extends CI_Model
{
    public function input_menu()
    {

        $data  = ['menu' => $this->input->post('menu', true)];

        $this->db->insert('user_menu', $data);
    }

    public function inputAccess()
    {
        $satu = 1;
        $data1 = [
            'menu_id' => $this->input->post('id_menu', true),
            'role_id' => $satu
        ];
        $this->db->insert('user_access_menu', $data1);
    }

    public function getSubMenu()
    {
        $query = " SELECT `user_sub_menu`.*, `user_menu`.`menu` 
        FROM `user_sub_menu` INNER JOIN `user_menu` 
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id_menu`
        ";

        return $this->db->query($query)->result_array();
    }

    public function input_submenu()
    {

        $data  = [
            'title' => $this->input->post('title', true),
            'menu_id' => $this->input->post('menu_id', true),
            'url' => $this->input->post('url', true),
            'icon' => $this->input->post('icon', true),
            'is_active' => $this->input->post('is_active', true)
        ];
        $this->db->insert('user_sub_menu', $data);
    }

    public function getMenu()
    {
        $this->db->where('id_menu !=', 1);
        return $this->db->get('user_menu')->result_array();
    }

    public function getMenuMax()
    {
        $this->db->select_max('id_menu');
        return  $this->db->get('user_menu')->result_array();
    }

    public function hapusMenu($id)
    {
        $this->db->delete('user_menu', ['id_menu' => $id]);
    }
    public function hapusSubMenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }
    public function edit()
    {
        $id = $this->input->post('id_menu');
        $menu = $this->input->post('menu');
        $this->db->set('menu', $menu);
        $this->db->where('id_menu', $id);
        return $this->db->update('user_menu');
    }
    public function editSubMenu()
    {
        $data = array(
            'id' => $this->input->post('id', true),
            'menu_id' => $this->input->post('menu_id', true),
            'title' => $this->input->post('title', true),
            'url' => $this->input->post('url', true),
            'icon' => $this->input->post('icon', true),
            'is_active' => $this->input->post('is_active', true)
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('user_sub_menu', $data);
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id_menu' => $id])->row_array();
    }
    public function getSubMenuById($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }
}
