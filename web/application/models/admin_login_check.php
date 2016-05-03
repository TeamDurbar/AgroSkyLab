<?php

class Admin_login_check extends CI_Model {

    //put your code here
    public function select_user($user_email, $user_password) {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', md5($user_password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

}
