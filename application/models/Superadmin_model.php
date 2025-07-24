<?php
class Superadmin_model extends CI_Model {
    public function tambahRole(){
        $this->db->insert('user_role',[
                'role' => $this->input->post('role',true)
        ]);
    }

     public function deleteJenisSurat($id){
        $this->db->where('id', $id);
        $this->db->delete('master_jenis_surat');
    }

}
