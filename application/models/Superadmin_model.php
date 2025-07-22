<?php
class Superadmin_model extends CI_Model {
     public function tambahRole(){
        $this->db->insert('user_role',[
                'role' => $this->input->post('role',true)
        ]);
    }
}
