<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Home extends ALBUMSO {
    
    function __construct() {

        parent::__construct();
        
//        if (!$this->checkLogin()) {
//            redirect(base_url().'login', 'refresh');
//        }
    }

    public function index() {
       $this->loadTemplateView('home_view',array());
    }

    public function tungns() {
        $this->load->view('welcome_message');
    }
    
    private function loadTemplateView($page, $data) {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}
