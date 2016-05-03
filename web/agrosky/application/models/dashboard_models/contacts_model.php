<?php

class contacts_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
    }
    public function save_contacts($data) {
        $this->dbk->insert('tbl_contacts', $data);
    }
    public function select_all_contacts() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_contacts');
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
}
