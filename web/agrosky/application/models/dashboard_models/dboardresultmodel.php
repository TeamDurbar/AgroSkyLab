<?php

class Dboardresultmodel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
    }
    public function save_result($data) {
        $this->db->insert('tbl_result', $data);
    }
    public function delete_result($id) {
        $this->dbk->where('id', $id);
        $this->dbk->delete('tbl_result');
    }
    public function select_all_result($pt) {
        $this->dbk->select('*');
        $this->dbk->from('tbl_result');
        $this->dbk->where('pt', $pt);
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_result($id) {
        $this->dbk->select('*');
        $this->dbk->from('tbl_result');
        $this->dbk->where('id',$id);
        $query_result = $this->dbk->get();
        $result = $query_result->row();
        return $result;
    }

    public function result_edit_m($data,$id) {
        $this->dbk->where('id', $id);
        $this->dbk->update('tbl_result',$data);
    }
}
