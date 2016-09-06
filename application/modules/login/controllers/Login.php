<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Login extends ALBUMSO {

    function __construct() {
        // Call the Model constructor
        parent::__construct();

        $this->load->model('K100_model', 'K100_MODEL');
        $this->load->model('N100_model', 'N100_MODEL');
        $this->load->model('Q100_model', 'Q100_MODEL');
    }

    public function index() {
        $data = $_POST;
        if (isset($data['SUBMITLOGIN'])) {
            $data['QV101'] = $data['EMAIL'];
            $data['QV102'] = md5($data['PASSWORD']);
            if($data['TYPELOGIN'] == 'P'){
                $result = $this->admin_checkproviderlogin($data);
            }else{
                $result = $this->admin_checkuserlogin($data);
            }
            
            if (count($result) > 0) {
                $result['status_login'] = 1; //login thanh cong
                $_SESSION['user'] = $result;
                redirect(base_url() . 'home');
            } else {
                $data['dataerror'] = 'Login failed!';
            }
        }
        $this->loadTemplateView('login_view', $data);
    }

    public function registry() {
        $data = $_POST;
        if (isset($data['SUBMITRESGIS'])) {
            $data['QV102'] = md5($data['PASSWORD']);
            if ($data['TYPEREGIS'] == 1) {
                $result = $this->kkub_inserttabk100($data);
                if ($result > 0) {
                    redirect(base_url() . 'login');
                } else {
                    $data['dataerror'] = 'Registry failed!';
                }
            } else {
                $result = $this->nalbumso_inserttabn100($data);
                if ($result > 0) {
                    redirect(base_url() . 'login');
                } else {
                    $data['dataerror'] = 'Registry failed!';
                }
            }
        }

        $this->loadTemplateView('login_registry', $data);
    }

    public function forgetpassword() {
        $data = $_POST;
        if (isset($data['SUBMITFORGET'])) {
            //
        }
        $this->loadTemplateView('login_forget_password', array());
    }

    public function logout() {
        $_SESSION['user']['status_login'] = 0;
        session_unset('user');
        redirect(base_url() . 'login');
    }

    private function admin_checkproviderlogin($data) {
        $pvQV101 = isset($data['QV101']) ? $data['QV101'] : '';
        $pvQV102 = isset($data['QV102']) ? $data['QV102'] : '';
        return $this->Q100_MODEL->admin_checkproviderlogin($pvQV101, $pvQV102,'');
    }
    
    private function admin_checkuserlogin($data) {
        $pvQV101 = isset($data['QV101']) ? $data['QV101'] : '';
        $pvQV102 = isset($data['QV102']) ? $data['QV102'] : '';
        return $this->Q100_MODEL->admin_checkuserlogin($pvQV101, $pvQV102,'');
    }

    private function qkub_inserttabq100($data) {
        $pnPQ100 = isset($data['PQ100']) ? $data['PQ100'] : 0;
        $pvQV101 = isset($data['QV101']) ? $data['QV101'] : '';
        $pvQV102 = isset($data['QV102']) ? $data['QV102'] : '';
        $pvQV106 = isset($data['QV106']) ? $data['QV106'] : '';
        $pnFS200 = isset($data['FS200']) ? $data['FS200'] : 0;
        $pnFB050 = isset($data['FB050']) ? $data['FB050'] : 0;
        $pnFN100 = isset($data['FN100']) ? $data['FN100'] : 0;
        $pnFK100 = isset($data['FK100']) ? $data['FK100'] : 0;
        $pvSOURC = isset($data['SOURC']) ? $data['SOURC'] : '';
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : '';

        return $this->Q100_MODEL->qkub_inserttabq100($pnPQ100, $pvQV101, $pvQV102, $pvQV106, $pnFS200, $pnFB050, $pnFN100, $pnFK100, $pvSOURC, $pvLOGIN);
    }

    private function kalbumso_listoftabk100($data) {
        $pnFK100 = isset($data['FK100']) ? $data['FK100'] : 0;
        return $this->K100_MODEL->kalbumso_listoftabk100($pnFK100);
    }

    private function kkub_inserttabk100($data) {
        $pnPK100 = isset($data['PK100']) ? $data['PK100'] : 0;
        $pvKV101 = isset($data['KV101']) ? $data['KV101'] : '';
        $pvKV102 = isset($data['KV102']) ? $data['KV102'] : '';
        $pvKV103 = isset($data['KV103']) ? $data['KV103'] : 'FREE';
        $pvKV104 = isset($data['KV104']) ? $data['KV104'] : '';
        $pvKV105 = isset($data['KV105']) ? $data['KV105'] : '';
        $pvQV102 = isset($data['QV102']) ? $data['QV102'] : '';
        $pnFN750 = isset($data['FN750']) ? $data['FN750'] : 0;
        $pnFN800 = isset($data['FN800']) ? $data['FN800'] : 0;
        $pnFN850 = isset($data['FN850']) ? $data['FN850'] : 0;
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : 'LOGIN';
        return $this->K100_MODEL->kalbumso_inserttabk100($pnPK100, $pvKV101, $pvKV102, $pvKV103, $pvKV104, $pvKV105,$pvQV102, $pnFN750, $pnFN800, $pnFN850, $pvLOGIN);
    }

    private function nalbumso_inserttabn100($data) {
        $pnPN100 = isset($data['PN100']) ? $data['PN100'] : 0;
        $pvNV101 = isset($data['NV101']) ? $data['NV101'] : '';
        $pvNV102 = isset($data['NV102']) ? $data['NV102'] : '';
        $pvNV103 = isset($data['NV103']) ? $data['NV103'] : 0;
        $pvNV104 = isset($data['NV104']) ? $data['NV104'] : '';
        $pvNV105 = isset($data['NV105']) ? $data['NV105'] : '';
        $pvQV102 = isset($data['QV102']) ? $data['QV102'] : '';
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : '';
        return $this->N100_MODEL->nalbumso_inserttabn100($pnPN100, $pvNV101, $pvNV102, $pvNV103, $pvNV104, $pvNV105, $pvQV102, $pvLOGIN);
    }

    private function loadTemplateView($page, $data) {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}
