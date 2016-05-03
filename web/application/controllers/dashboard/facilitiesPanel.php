<?php

class FacilitiesPanel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $m_view = $this->session->userdata('user_id');
        if ($m_view == NULL) {
            redirect("admin/login", "refresh");
        }
        $this->load->model('dashboard_models/institution_model', 'institution_m', TRUE);
    }

    public function message() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Other Facilities";
        $data['mess'] = $this->institution_m->select_all_message();
        $data['maincontain'] = $this->load->view('dboard/message', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function message_delete($id) {
        $this->institution_m->delete_institution($id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('facilities/message');
    }

    public function message_edit($id) {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Other Facilities";
        $data['ins_row'] = $this->institution_m->select_institution($id);
        $data['maincontain'] = $this->load->view('dboard/messageEdit', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function save_message() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/institution/';
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
        }
        /* ---------------------------- */

        $data['title'] = $this->input->post('title', TRUE);
        $data['about'] = $this->input->post('about', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $data['pt'] = 1;
        $this->institution_m->save_institution($data);


        $sdata = array();
        $sdata['message'] = 'Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('facilities/message');
    }

    public function message_edit_save() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/institution/';
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
        }
        /* ---------------------------- */
        $id = $this->input->post('id', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['about'] = $this->input->post('about', TRUE);
        $data['date'] = $this->input->post('date', TRUE);
        $this->institution_m->institution_edit_m($data, $id);


        $sdata = array();
        $sdata['message'] = 'Edit Successfully';
        $this->session->set_userdata($sdata);
        redirect('facilities/message');
    }

}
