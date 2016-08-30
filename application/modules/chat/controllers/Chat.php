<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Chat extends ALBUMSO {

    public function index() {
       $this->load->view('index');
    }
}
