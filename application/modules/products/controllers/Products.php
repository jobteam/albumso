<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Products extends ALBUMSO {

    public function index() {
       $this->load->view('index');
    }

    public function tungns() {
        $this->load->view('welcome_message');
    }

}
