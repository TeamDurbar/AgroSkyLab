<?php

class NoticePanel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $m_view = $this->session->userdata('user_id');
        if ($m_view == NULL) {
            redirect("admin/login", "refresh");
        }
        $this->load->model('dashboard_models/notice_model', 'notice_m', TRUE);
        $this->load->model('dashboard_models/gallery_model', 'gallery_m', TRUE);
    }

    public function notice_post() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "News Feed";
        $data['maincontain'] = $this->load->view('dboard/notice_post', '', TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function all_notice() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "News Feed";
        $data['notice'] = $this->notice_m->select_all_notice();
        $data['maincontain'] = $this->load->view('dboard/notice_view', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function notice_delete($notice_id) {
        $this->notice_m->delete_notice($notice_id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('notice/all_notice');
    }

    public function notice_edit($id) {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "News Feed";
        $data['notice_row'] = $this->notice_m->select_notice($id);
        $data['maincontain'] = $this->load->view('dboard/notice_Edit', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function save_notice() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/notice/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
        $config['max_size'] = '5000KB';
        $datap =array();
        $datap['title'] = $data['title'] = $this->input->post('title', TRUE);
        $data['contain'] = $this->input->post('contain', TRUE);
        $data['date'] = $roll = $this->input->post('date', TRUE);
        $data['timeline'] = $roll = $this->input->post('timeline', TRUE);
        
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error['erroraaa'] = $this->upload->display_errors();
            $this->session->set_userdata($error);
        } else {
            $fdata = $this->upload->data();
            $datap['photo'] = $data['image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $this->gallery_m->save_gallery($datap);
        }

        /* ---------------------------- */

        $this->notice_m->save_notice_model($data);


        $sdata = array();
        $sdata['message'] = 'Notice Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('notice/notice_post');
    }

    public function notice_edit_save() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/notice/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml';
        $config['max_size'] = '5000KB';

        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error['erroraaa'] = $this->upload->display_errors();
            $this->session->set_userdata($error);
        } else {
            $fdata = $this->upload->data();
            $data['image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }

        /* -------- -------------- */
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['contain'] = $this->input->post('contain', TRUE);
        $data['dept'] = $roll = $this->input->post('dept', TRUE);
        $data['date'] = $roll = $this->input->post('date', TRUE);
        $data['timeline'] = $roll = $this->input->post('timeline', TRUE);

        $this->notice_m->notice_edit_m($data,$id);


        $sdata = array();
        $sdata['message'] = 'Notice Edit Successfully';
        $this->session->set_userdata($sdata);
        redirect('notice/all_notice');
    }

}
