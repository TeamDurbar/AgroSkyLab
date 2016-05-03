<?php

class DboardPanel extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view==NULL){
            redirect("admin/login","refresh");
        }
    }
    public function index() {
        $data = array();
        $data['action']='4';
        $data['title'] = "Dashboard";
        $data['maincontain'] = $this->load->view('dboard/dashboard', '', TRUE);
        $this->load->view('dboard/master', $data);
    }
    
    public function home() {
        $data = array();
        $data['action']='4';
        $data['title'] = "Dashboard";
        $data['maincontain'] = $this->load->view('dboard/dashboard', '', TRUE);
        $this->load->view('dboard/master', $data);
    }
    public function logout() {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $sess_data=array();
        $sess_data['message_success']="successfuly logout";
        $this->session->set_userdata($sess_data);
        redirect("admin/login");
    }
    public function admission(){
        $data = array();
        $data['action']='4';
        $data['title'] = "Admission";
        $data['maincontain'] = $this->load->view('dboard/admission', '', TRUE);
        $this->load->view('dboard/master', $data);
    }
    public function class_routine(){
        $data = array();
        $data['action']='4';
        $data['title'] = "Class Routine";
        $data['maincontain'] = $this->load->view('dboard/class_routine', '', TRUE);
        $this->load->view('dboard/master', $data);
    }
    public function class_routine_view(){
        $data = array();
        $data['action']='4';
        $data['title'] = "Class Routine";
        $data['maincontain'] = $this->load->view('dboard/class_routine_view', '', TRUE);
        $this->load->view('dboard/master', $data);
    }
    
}
