<?php
class Menu_model extends CI_Model {

    public function deleteMenu($id){
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }

    public function deleteSubMenu($id){
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    public function editMenu($id,$data){
        $this->db->where('id', $id);
        $this->db->update('user_menu', $data);
    }

    public function updateSubMenu($id){
         $data = [
                'menu_id' => $this->input->post('menu_id',true),
                'title' => $this->input->post('title',true),
                'url' => $this->input->post('url',true),
                'icon' => $this->input->post('icon',true),
                'is_active' => $this->input->post('is_active',true)
            ];
            $this->db->where('id', $id);
            $this->db->update('user_sub_menu',$data);
    }

    public function tambahSubMenu(){
        $this->db->insert('user_sub_menu',[
                'menu_id' => $this->input->post('menu_id',true),
                'title' => $this->input->post('title',true),
                'url' => $this->input->post('url',true),
                'icon' => $this->input->post('icon',true),
                'is_active' => $this->input->post('is_active',true)
        ]);
    }

    public function getAllSubMenu(){
       
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        ";

        return $this->db->query($query)->result_array();
    }
    
}
