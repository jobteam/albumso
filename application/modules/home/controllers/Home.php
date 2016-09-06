<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Home extends ALBUMSO {

    function __construct() {

        parent::__construct();
        
        $this->load->model('K100_model', 'K100_MODEL');
    }

    public function index() {
        $data['lstK100'] = $this->kalbumso_listoftabk100(0);
        $this->loadTemplateView('home_view', $data);
    }

    public function tungns() {
        $this->load->view('welcome_message');
    }

    private function kalbumso_listoftabk100($pnPK100) {
        return $this->K100_MODEL->kalbumso_listoftabk100($pnPK100);
    }

    private function loadTemplateView($page, $data) {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}
