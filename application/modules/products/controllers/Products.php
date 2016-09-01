<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Products extends ALBUMSO {

    public function index() {
       $this->loadTemplateView('products_view',array());
    }

    public function detail() {
       $this->loadTemplateView('products_detail',array());
    }

    private function loadTemplateView($page, $data) {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}
