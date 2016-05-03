<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supper_admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view==NULL){
            redirect("admin_login","refresh");
        }
    }
    public function index() {
        $data = array();
        $data['title']="Home";
        $data['maincontain'] = $this->load->view('admin/dashboard_contain', '', TRUE);
        $this->load->view("admin/dashboard",$data);
    }
    public function logout() {
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_id');
        $sess_data=array();
        $sess_data['message_success']="successfuly logout";
        $this->session->set_userdata($sess_data);
        redirect("admin/login");
    }
    public function add_contain() {
        $data = array();
        $data['title']="Add contain";
        $data['maincontain'] = $this->load->view('admin/add_contain', '', TRUE);
        $this->load->view("admin/admin_master",$data);
    }
}
