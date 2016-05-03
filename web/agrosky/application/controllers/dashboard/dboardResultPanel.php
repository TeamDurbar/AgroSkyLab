<?php

class DboardResultPanel extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view==NULL){
            redirect("admin/login","refresh");
        }
        $this->load->model('dashboard_models/dboardresultmodel', 'result_m', TRUE);
    }
    public function dboardResult_all() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Result";
        $data['pt']=0;
        $data['mess'] = $this->result_m->select_all_result(0);
        $data['maincontain'] = $this->load->view('dboard/result', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }


    public function dboardResult_delete($id) {
        $this->result_m->delete_result($id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('dboardResult/dboardResult_all');
    }

    public function dboardResult_edit($id) {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Notice";
        $data['result'] = $this->result_m->select_result($id);
        $data['maincontain'] = $this->load->view('dboard/resultedit', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function dboardResult_save() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/notice/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx';
        $config['max_size'] = '10240KB';

        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error['erroraaa'] = $this->upload->display_errors();
            $this->session->set_userdata($error);
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }

        /* ---------------------------- */

        $data['title'] = $this->input->post('title', TRUE);
        $data['contain'] = $this->input->post('contain', TRUE);
        
        $this->result_m->save_result($data);


        $sdata = array();
        $sdata['message'] = 'result Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('dboardResult/dboardResult_all');
    }

    public function dboardResult_edit_save() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/notice/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|xml|docx';
        $config['max_size'] = '10240KB';

        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error['erroraaa'] = $this->upload->display_errors();
            $this->session->set_userdata($error);
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
        }

        /* -------- -------------- */
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['contain'] = $this->input->post('contain', TRUE);

        $this->result_m->result_edit_m($data,$id);


        $sdata = array();
        $sdata['message'] = 'Result Edit Successfully';
        $this->session->set_userdata($sdata);
        redirect('dboardResult/dboardResult_all');
    }
}
