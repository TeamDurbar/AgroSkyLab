<?php

class institutionPanel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view==NULL){
            redirect("admin/login","refresh");
        }
        $this->load->model('dashboard_models/institution_model', 'institution_m', TRUE);
        $this->load->model('dashboard_models/gallery_model', 'gallery_m', TRUE);
    }

    public function institution() {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Soil Info";
        $data['institution'] =  $this->institution_m->select_all_institution();
        $data['maincontain'] = $this->load->view('dboard/institution', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }
    public function institution_delete($id) {
        $this->institution_m->delete_institution($id);
        $sdata = array();
        $sdata['message'] = 'Delete Record Successfully';
        $this->session->set_userdata($sdata);
        redirect('institution/institution');
    }
    public function institution_edit($id) {
        $data = array();
        $data['action'] = '4';
        $data['title'] = "Institution";
        $data['ins_row'] =  $this->institution_m->select_institution($id);
        $data['maincontain'] = $this->load->view('dboard/institutionEdit', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }

    public function save_institution() {
        $data = array();
        $datae = array();
        $datat = array();
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
            $this->gallery_m->save_gallery($data);
        }
        /* ---------------------------- */

        $data['country'] = $this->input->post('country', TRUE);
        $data['division'] = $this->input->post('division', TRUE);
        $data['district'] = $this->input->post('district', TRUE);
        $data['contain'] = $this->input->post('contain', TRUE);
        
        $datae['soil_id'] = $datat['soil_id'] = $this->institution_m->save_institution($data);
        
        $datae['zinc'] = $this->input->post('zinc', TRUE);
        $datae['iron'] = $this->input->post('iron', TRUE);
        $datae['copper'] = $this->input->post('copper', TRUE);
        $datae['manganese'] = $this->input->post('manganese', TRUE);
        
        $datat['lead'] = $this->input->post('lead', TRUE);
        $datat['nickel'] = $this->input->post('nickel', TRUE);
        $datat['arsenic'] = $this->input->post('arsenic', TRUE);
        $datat['cadmium'] = $this->input->post('cadmium', TRUE);
        if(!empty($datae['zinc']) || !empty($datae['iron']) || !empty($datae['copper'])  || !empty($datae['manganese'])){
            $this->institution_m->essential_metals($datae);
        }
        if(!empty($datat['lead']) || !empty($datat['nickel']) || !empty($datat['arsenic'])  || !empty($datat['cadmium'])){
            $this->institution_m->toxic_metals($datat);
        }

        $sdata = array();
        $sdata['message'] = 'Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('institution/institution');
    }
    public function institution_edit_save() {
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
        $this->institution_m->institution_edit_m($data,$id);


        $sdata = array();
        $sdata['message'] = 'Edit Successfully';
        $this->session->set_userdata($sdata);
        redirect('institution/institution');
    }
}
