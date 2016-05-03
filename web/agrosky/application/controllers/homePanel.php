<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class HomePanel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_models/institution_model', 'institution_m', TRUE);
        $this->load->model('dashboard_models/notice_model', 'notice_m', TRUE);
        $this->load->model('dashboard_models/gallery_model', 'gallery_m', TRUE);
        $this->load->model('dashboard_models/person_model', 'person_m', TRUE);
        $this->load->model('dashboard_models/contacts_model', 'contacts_m', TRUE);
        $this->load->model('dashboard_models/dboardresultmodel', 'result_m', TRUE);
        $this->load->model('calendar_model', 'calendar_m', TRUE);
    }

    public function index() {
        $data = array();
        $data['title'] = "Home";
        $data['action'] = '1';
        $data['gallery'] = $this->gallery_m->select_all_gallerysite();
        $data['institution'] = $this->notice_m->select_all_notice_site();
        $data['slide'] = $this->notice_m->select_all_notice_site();
        $data['timeline'] = $this->notice_m->select_all_timeline();
        $data['maincontain'] = $this->load->view('home', $data, TRUE);
        $data['slider'] = $this->load->view('slide', $data, TRUE);
        $this->load->view('master', $data);
    }

    function ajax_calendar($year = NULL, $month = NULL) {
        $this->load->model('calendar_model');
        $noticesite = $this->notice_m->select_all_notice_site();
        $data = array();
        foreach ($noticesite as $v_noticesite) {
            $a = substr($v_noticesite->date, 3, 2);
            $b = substr($v_noticesite->date, 0, 2);
            $c = substr($v_noticesite->date, 6, 4);
            if ($year == $c and $b == $month) {
                $a = $a + 0;
                $data[$a]['url'] = base_url() . "noticeDetail/" . $v_noticesite->id;
                $data[$a]['title'] = $v_noticesite->title;
            }
        }
        $_html = $this->calendar_m->get_calendar($year, $month, $data);
        echo $_html;
    }

    public function soilinfo() {
        $data = array();
        $data['action'] = '2';
        $data['title'] = "Soil Information";
        $datas = array();
        $datas['country'] = $this->input->post('country', TRUE);
        $datas['division'] = $roll = $this->input->post('division', TRUE);
        $datas['district'] = $roll = $this->input->post('district', TRUE);
        //$data['soilinfo'] = $this->institution_m->select_all_message($datas);
        $data['maincontain'] = $this->load->view('soilinfo', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function soilinfoview() {
        $data = array();
        $data['action'] = '2';
        $data['title'] = "Soil Information";
        $data['maincontain'] = $this->load->view('soilinfoview', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function crops() {
        $data = array();
        $data['action'] = '3';
        $data['title'] = "Crops Information";
        //$data['institution'] = $this->institution_m->select_all_message();
        $data['maincontain'] = $this->load->view('crops', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function cropsview() {
        $data = array();
        $data['action'] = '3';
        $data['title'] = "Crops Information";
        //$data['institution'] = $this->institution_m->select_all_message();
        $data['maincontain'] = $this->load->view('cropsview', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function onlinehelp() {
        $data = array();
        $data['action'] = '6';
        $data['title'] = "Online Help";
        //$data['institution'] = $this->institution_m->select_all_message();
        $data['maincontain'] = $this->load->view('onlinehelp', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function onlinehelpshow() {
        $data = array();
        $data['action'] = '6';
        $data['title'] = "Online Help";
        $data['maincontain'] = $this->load->view('onlinehelpshow', $data, TRUE);
        $this->load->view('master', $data);
    }
    public function onlinesuggestion() {
        $data = array();
        $data['action'] = '7';
        $data['title'] = "Online Suggestion";
        $data['maincontain'] = $this->load->view('onlinesuggestion', $data, TRUE);
        $this->load->view('master', $data);
    }


    public function photoGallery($name = "") {
        $data = array();
        $data['action'] = '6';
        $data['title'] = "Photo Gallery";
        $data['name'] = $name;
        $data['gallery'] = $this->gallery_m->select_all_gallery();
        $data['maincontain'] = $this->load->view('gallery', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function videoGallery() {
        $data = array();
        $data['action'] = '6';
        $data['title'] = "Video Gallery";
        $data['maincontain'] = $this->load->view('video', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function noticeView($name = "") {
        $data = array();
        $data['action'] = '7';
        $data['title'] = "Notice Board";
        $data['name'] = $name;
        $data['notice'] = $this->notice_m->select_all_notice();
        $data['maincontain'] = $this->load->view('notice', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function noticeDetail($name = "") {
        $data = array();
        $data['action'] = '7';
        $data['title'] = "Notice Board";
        $data['name'] = $name;
        $data['notice'] = $this->notice_m->select_all_notice();
        $data['maincontain'] = $this->load->view('noticeDetail', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function contacts() {
        $data = array();
        $data['action'] = '8';
        $data['title'] = "Contacts";
        $data['maincontain'] = $this->load->view('contacts', $data, TRUE);
        $this->load->view('master', $data);
    }

    public function contacts_sent() {
        $data = array();
        $data['name'] = $this->input->post('name', TRUE);
        $data['email_c'] = $this->input->post('email', TRUE);
        $data['phone_c'] = $this->input->post('phone', TRUE);
        $data['message_c'] = $this->input->post('message', TRUE);
        $this->contacts_m->save_contacts($data);
        $sdata = array();
        $sdata['message'] = 'send your message ';
        $this->session->set_userdata($sdata);
        redirect('contacts');
    }

    public function dboard() {
        redirect("admin/login");
    }

    public function error404() {
        $this->load->view('error', '');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */