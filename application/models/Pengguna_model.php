<?php
class Pengguna_model extends CI_Model {
        public function ubahPassword($username, $password_baru) {
        $hash = password_hash($password_baru, PASSWORD_DEFAULT);
        $this->db->where('username', $username);
        $this->db->update('users', ['password' => $hash]);
    }

}