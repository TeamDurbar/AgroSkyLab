<?php

class gallery_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $CI = &get_instance();
        $this->dbk = $CI->load->database('dbk', TRUE);
    }

    public function save_gallery($data) {
        $this->dbk->insert('tbl_gallery', $data);
    }

    public function select_all_gallery() {
        $this->dbk->select('*');
        $this->dbk->from('tbl_gallery');
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_gallerysite() {
        $this->dbk->select('*');
        $this->dbk->limit(10);
        $this->dbk->from('tbl_gallery');
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_slide() {
        $this->dbk->select('*');
        $this->dbk->limit(10);
        $this->dbk->from('tbl_gallery');
        $this->dbk->where('pt', 1);
        $this->dbk->or_where('pt', 3);
        $this->dbk->order_by("id", "desc");
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_gallery_manu() {
        $this->dbk->distinct();
        $this->dbk->select('topic');
        $this->dbk->from('tbl_gallery');
        $query_result = $this->dbk->get();
        $result = $query_result->result();
        return $result;
    }
    public function delete_gallery($id) {
        $this->dbk->where('id', $id);
        $this->dbk->delete('tbl_gallery');
    }

}
