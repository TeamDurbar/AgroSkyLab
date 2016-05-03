<?php

class contactsPanel extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $m_view = $this->session->userdata('user_id');
        if ($m_view == NULL) {
            redirect("admin/login", "refresh");
        }
        $this->load->model('dashboard_models/contacts_model', 'contacts_m', TRUE);
    }
    public function contacts() {
        $data = array();
        $data['action']='4';
        $data['title'] = "Contacts";
        $data['mess'] = $this->contacts_m->select_all_contacts();
        $data['maincontain'] = $this->load->view('dboard/contacts', $data, TRUE);
        $this->load->view('dboard/master', $data);
    }
}
