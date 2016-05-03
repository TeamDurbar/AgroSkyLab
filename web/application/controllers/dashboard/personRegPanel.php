<?php

class PersonRegPanel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view==NULL){
            redirect("admin/login","refresh");
        }
        $this->load->model('dashboard_models/person_model', 'person_m', TRUE);
    }

    public function new_teacher() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "New Teacher";
        $data['maincontain'] = $this->load->view('dboard/new_teacher', '', TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function all_teacher() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "All Teacher";
        $data['teacher'] = $this->person_m->select_all_teacher();
        $data['maincontain'] = $this->load->view('dboard/teacher', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function teacher_delete($id) {
        $this->person_m->delete_teacher($id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('person/all_teacher');
    }

    public function save_teacher() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/employ/';
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

        $data['id'] = $this->input->post('id', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['dept'] = $this->input->post('dept', TRUE);
        $data['father_name'] = $this->input->post('father_name', TRUE);
        $data['mother_name'] = $this->input->post('mother_name', TRUE);
        $data['birth_bate'] = $this->input->post('birth_bate', TRUE);
        $data['join_date'] = $this->input->post('join_date', TRUE);
        $data['gender'] = $this->input->post('gender', TRUE);
        $data['marital_status'] = $this->input->post('marital_status', TRUE);
        $data['blood_group'] = $this->input->post('blood_group', TRUE);
        $data['person_type'] = $this->input->post('person_type', TRUE);
        $data['religion'] = $this->input->post('religion', TRUE);
        $data['nationality'] = $this->input->post('nationality', TRUE);
        $data['national_id'] = $this->input->post('national_id', TRUE);
        $data['mobile_number'] = $this->input->post('mobile_number', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['village'] = $this->input->post('village', TRUE);
        $data['district'] = $this->input->post('district', TRUE);
        $data['division'] = $this->input->post('division', TRUE);
        $data['country'] = $this->input->post('country', TRUE);
        $data['zip_code'] = $this->input->post('zip_code', TRUE);
        $data['position'] = $this->input->post('position', TRUE);
        $data['pt'] = 1;
        $this->person_m->save_teacher($data);


        $sdata = array();
        $sdata['message'] = 'Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('person/new_teacher');
    }

    public function all_staff() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Staff";
        $data['staff'] = $this->person_m->select_all_staff();
        $data['maincontain'] = $this->load->view('dboard/staff', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function new_staff() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Staff";
        $data['maincontain'] = $this->load->view('dboard/new_staff', '', TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function staff_delete($id) {
        $this->person_m->delete_staff($id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('person/all_staff');
    }

    public function save_staff() {
        $data = array();
        /* --------image file--------------- */
        $config['upload_path'] = 'images/employ/';
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

        $data['id'] = $this->input->post('id', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['dept'] = $this->input->post('dept', TRUE);
        $data['father_name'] = $this->input->post('father_name', TRUE);
        $data['mother_name'] = $this->input->post('mother_name', TRUE);
        $data['birth_bate'] = $this->input->post('birth_bate', TRUE);
        $data['join_date'] = $this->input->post('join_date', TRUE);
        $data['gender'] = $this->input->post('gender', TRUE);
        $data['marital_status'] = $this->input->post('marital_status', TRUE);
        $data['blood_group'] = $this->input->post('blood_group', TRUE);
        $data['person_type'] = $this->input->post('person_type', TRUE);
        $data['religion'] = $this->input->post('religion', TRUE);
        $data['nationality'] = $this->input->post('nationality', TRUE);
        $data['national_id'] = $this->input->post('national_id', TRUE);
        $data['mobile_number'] = $this->input->post('mobile_number', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['village'] = $this->input->post('village', TRUE);
        $data['district'] = $this->input->post('district', TRUE);
        $data['division'] = $this->input->post('division', TRUE);
        $data['country'] = $this->input->post('country', TRUE);
        $data['zip_code'] = $this->input->post('zip_code', TRUE);
        $data['position'] = $this->input->post('position', TRUE);
        $data['pt'] = 2;
        $this->person_m->save_staff($data);


        $sdata = array();
        $sdata['message'] = 'Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('person/new_staff');
    }

}
