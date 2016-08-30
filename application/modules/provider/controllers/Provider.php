<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Provider extends ALBUMSO {
    
    function __construct() {

        parent::__construct();
        
//        if (!$this->checkLogin()) {
//            redirect(base_url().'login', 'refresh');
//        }
    }

    public function index() {
       $this->loadTemplateView('provider_view',array());
    }

    public function detail() {
       $this->loadTemplateView('provider_detail',array());
    }

    private function loadTemplateView($page, $data) {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}
