<?php

class Person_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
    }
    public function save_teacher($data) {
        $this->dbk->insert('tbl_person', $data);
    }
    public function select_all_teacher() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_person');
        $this->dbk->where('pt',1);
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_teacher($id) {
        $this->dbk->where('reg_id', $id);
        $this->dbk->delete('tbl_person');
    }
    public function save_staff($data) {
        $this->dbk->insert('tbl_person', $data);
    }
    public function select_all_staff() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_person');
        $this->dbk->where('pt',2);
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_staff($id) {
        $this->dbk->where('reg_id', $id);
        $this->dbk->delete('tbl_person');
    }
}
