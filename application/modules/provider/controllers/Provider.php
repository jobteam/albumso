<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Provider extends ALBUMSO {


    function __construct() {

        parent::__construct();

        
        $this->load->model('B050_model', 'B050_MODEL');
        $this->load->model('K100_model', 'K100_MODEL');
    }

    public function index() {
        $data['lstK100'] = $this->kalbumso_listoftabk100(0);
        $this->loadTemplateView('provider_view', $data);
    }

    public function detail() {
        $data['FK100'] = $this->uri->segment(3);        
        $data['lstB050'] = $this->balbumso_listoftabb050($data);
        $this->loadTemplateView('provider_detail', $data);
    }

    public function profile() {
        $data['FK100'] = $this->uri->segment(3); 
        $data['lstK100'] = $this->kalbumso_listoftabk100($data['FK100']);
        $this->loadTemplateView('provider_profile',$data);
    }

    private function balbumso_listoftabb050($data) {
        $pnPB050 = isset($data['FB050']) ? $data['FB050'] : 0;
        $pnFK100 = isset($data['FK100']) ? $data['FK100'] : 0;
        return $this->B050_MODEL->balbumso_listoftabb050($pnPB050, $pnFK100, '');
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
