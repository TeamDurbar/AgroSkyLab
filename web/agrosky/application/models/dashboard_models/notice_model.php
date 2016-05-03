<?php

class notice_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
    }

    public function save_notice_model($data) {
        $this->dbk->insert('tbl_notice', $data);
    }

    public function select_all_notice() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_notice');
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_notice_site() {
        $this->dbk->select('*');
        $this->dbk->limit(10);
        $this->dbk->from('tbl_notice');
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_timeline() {
        $this->dbk->select('*');
        $this->dbk->limit(10);
        $this->dbk->from('tbl_notice');
        $this->dbk->where('timeline', 1);
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_notice($notice_id) {
        $this->dbk->where('id', $notice_id);
        $this->dbk->delete('tbl_notice');
    }

    public function select_notice($id) {
        $this->dbk->select('*');
        $this->dbk->from('tbl_notice');
        $this->dbk->where('id', $id);
        $query_result = $this->dbk->get();
        $result = $query_result->row();
        return $result;
    }

    public function notice_edit_m($data,$id) {
        $this->dbk->where('id', $id);
        $this->dbk->update('tbl_notice',$data);
    }

}
