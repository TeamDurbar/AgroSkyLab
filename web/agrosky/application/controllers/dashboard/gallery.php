<?php

class gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view==NULL){
            redirect("admin/login","refresh");
        }
        $this->load->model('dashboard_models/gallery_model', 'gallery_m', TRUE);
    }
    public function gallery_view() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Gallery";
        $data['gallery']=$this->gallery_m->select_all_gallery();
        $data['maincontain'] = $this->load->view('dboard/gallery', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }
    public function gallery_list() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Gallery";
        $data['gallery']=$this->gallery_m->select_all_gallery();
        $data['maincontain'] = $this->load->view('dboard/gallery_view', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }
    public function delete_gallery($id) {
        $this->gallery_m->delete_gallery($id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('gallery/gallery_list');
    }

    public function new_gallery() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Gallery";
        $data['maincontain'] = $this->load->view('dboard/new_gallery', '', TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function save_gallery() {
        $data = array();
        /* --------file--------------- */
        $config['upload_path'] = 'images/gallery/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '1768';

        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error['erroraaa'] = $this->upload->display_errors();
            $this->session->set_userdata($error);
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['title'] = $this->input->post('title', TRUE);
            $data['topic'] = $this->input->post('topic', TRUE);
            $data['date'] = $this->input->post('date', TRUE);
            $pt1 = $this->input->post('pt1', TRUE);
            $pt2 = $this->input->post('pt2', TRUE);
            if ($pt1 & $pt2) { $data['pt'] = 3; } else if ($pt1) { $data['pt'] = 1; } else if ($pt2) { $data['pt'] = 2; } else { $data['pt'] = 0; }
            $this->gallery_m->save_gallery($data);
            $sdata = array();
            $sdata['message'] = 'Save Successfully';
            $this->session->set_userdata($sdata);
        }
        redirect('gallery/new_gallery');
    }

}
