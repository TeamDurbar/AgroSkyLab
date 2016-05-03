<?php

class Admin_login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $m_view=$this->session->userdata('user_id');
        if($m_view!=NULL){
            redirect("supper_admin","refresh");
        }
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function check_login() {
        $sess_data=array();
        $user_email = $this->input->post('user_email', TRUE);
        $user_password = $this->input->post('user_password', TRUE);
        $this->load->model('admin_login_check','user_model',TRUE);
        $result=$this->user_model->select_user($user_email,$user_password);
        if($result){
            $sess_data['user_id']=$result->id;
            $sess_data['user_name']=$result->user_name;
            $this->session->set_userdata($sess_data);
            redirect("supper_admin");
        }else{
            
            $sess_data['message_inv']="Invelid ID or Password";
            $this->session->set_userdata($sess_data);
            redirect("admin_login");
        }
    }

}
