<?php

class institution_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
    }
    public function save_institution($data) {
        $this->dbk->insert('tbl_soil', $data);
        $last_id = $this->dbk->insert_id();
        return $last_id;
    }
    public function essential_metals($datae) {
        $this->dbk->insert('tbl_essential_metals', $datae);
    }
    public function toxic_metals($datat) {
        $this->dbk->insert('tbl_toxic_metals', $datat);
    }
    public function delete_institution($id) {
        $this->dbk->where('id', $id);
        $this->dbk->delete('tbl_soil');
    }
    public function select_all_institution() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_soil');
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_institution($id) {
        $this->dbk->select('*');
        $this->dbk->from('tbl_institution');
        $this->dbk->where('id',$id);
        $query_result = $this->dbk->get();
        $result = $query_result->row();
        return $result;
    }
    public function select_all_message() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_institution');
        $this->dbk->where('pt',1);
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_message_academic() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_institution');
        $this->dbk->where('pt',2);
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function institution_edit_m($data,$id) {
        $this->dbk->where('id', $id);
        $this->dbk->update('tbl_institution',$data);
    }
}
