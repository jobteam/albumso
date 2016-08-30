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
            $data['CTYPE'] = $data['TYPELOGIN'];
            $result = $this->qkub_checktabq100($data);
            if (count($result) > 0) {
                $result = $result[0];
                $result['status_login'] = 1; //login thanh cong
                $_SESSION['user'] = $result;
                redirect(base_url() . 'home');
            } else {
                $data['dataerror'] = 'Login failed!';
            }
        }
        $this->loadTemplateView('login_view', $data);
    }

    public function registryvendor() {
        $data = $_POST;

        if (isset($data['SUBMITRESGIS'])) {
            $result = $this->kkub_inserttabk100($data);
            if ($result > 0) {
                $data['FK100'] = $result;
                $data['QV101'] = $data['KV103'];
                $data['QV102'] = md5($data['PASSWORD']);
                $data['QV106'] = $data['KV103'];

                $this->qkub_inserttabq100($data);
                redirect(base_url() . 'login');
            } else {
                 $data['dataerror'] = 'Registry failed!';
            }
        }

        $this->loadTemplateView('login_registry_vendor', $data);
    }

    public function registryviewer() {
        $data = $_POST;

        if (isset($data['SUBMITRESGIS'])) {
            $result = $this->nkub_inserttabn100($data);
            if ($result > 0) {
                $data['FN100'] = $result;
                $data['QV101'] = $data['NV106'];
                $data['QV102'] = md5($data['PASSWORD']);
                $data['QV106'] = $data['NV106'];

                $this->qkub_inserttabq100($data);
                redirect(base_url() . 'login');
            } else {
                 $data['dataerror'] = 'Registry failed!';
            }
        }

        $this->loadTemplateView('login_registry_couple', $data);
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

    private function qkub_checktabq100($data) {
        $pvQV101 = isset($data['QV101']) ? $data['QV101'] : '';
        $pvQV102 = isset($data['QV102']) ? $data['QV102'] : '';
        $pvCTYPE = isset($data['CTYPE']) ? $data['CTYPE'] : 'C';
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : '';
        return $this->Q100_MODEL->qkub_checktabq100($pvQV101, $pvQV102, $pvCTYPE, $pvLOGIN);
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

    private function kkub_listoftabk100($data) {
        $pnFK100 = isset($data['FK100']) ? $data['FK100'] : 0;
        $pvSEARC = isset($data['SEARC']) ? $data['SEARC'] : '';
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : '';
        return $this->K100_MODEL->kkub_listoftabk100($pnFK100, $pvSEARC, $pvLOGIN);
    }

    private function kkub_inserttabk100($data) {
        $pnPK100 = isset($data['PK100']) ? $data['PK100'] : 0;
        $pvKV101 = isset($data['KV101']) ? $data['KV101'] : '';
        $pvKV102 = isset($data['KV102']) ? $data['KV102'] : '';
        $pvKV103 = isset($data['KV103']) ? $data['KV103'] : '';
        $pvKV104 = isset($data['KV104']) ? $data['KV104'] : '';
        $pvKV105 = isset($data['KV105']) ? $data['KV105'] : '';
        $pdKD108 = isset($data['KD108']) ? $data['KD108'] : 0;
        $pvKV109 = isset($data['KV109']) ? $data['KV109'] : '';
        $pvKV112 = isset($data['KV112']) ? $data['KV112'] : '';
        $pvKV113 = isset($data['KV113']) ? $data['KV113'] : '';
        $pnKN114 = isset($data['KN114']) ? $data['KN114'] : 0;
        $pnKN115 = isset($data['KN115']) ? $data['KN115'] : 0;
        $pnKN125 = isset($data['KN125']) ? $data['KN125'] : 0;
        $pvKV126 = isset($data['KV126']) ? $data['KV126'] : '';
        $pvKV127 = isset($data['KV127']) ? $data['KV127'] : '';
        $pvKV128 = isset($data['KV128']) ? $data['KV128'] : '';
        $pdKD129 = isset($data['KD129']) ? $data['KD129'] : 0;
        $pvKV130 = isset($data['KV130']) ? $data['KV130'] : '';
        $pvKV131 = isset($data['KV131']) ? $data['KV131'] : '';
        $pvKV132 = isset($data['KV132']) ? $data['KV132'] : '';
        $pvKV133 = isset($data['KV133']) ? $data['KV133'] : '';
        $pvKV134 = isset($data['KV134']) ? $data['KV134'] : '';
        $pvKV135 = isset($data['KV135']) ? $data['KV135'] : '';
        $pvKV136 = isset($data['KV136']) ? $data['KV136'] : '';
        $pvKV137 = isset($data['KV137']) ? $data['KV137'] : '';
        $pvKV138 = isset($data['KV138']) ? $data['KV138'] : '';
        $pvKV140 = isset($data['KV140']) ? $data['KV140'] : '';
        $pvKV141 = isset($data['KV141']) ? $data['KV141'] : '';
        $pnFV500 = isset($data['FV500']) ? $data['FV500'] : 0;
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : '';
        return $this->K100_MODEL->kkub_inserttabk100($pnPK100, $pvKV101, $pvKV102, $pvKV103, $pvKV104, $pvKV105, $pdKD108, $pvKV109, $pvKV112, $pvKV113, $pnKN114, $pnKN115, $pnKN125, $pvKV126, $pvKV127, $pvKV128, $pdKD129, $pvKV130, $pvKV131, $pvKV132, $pvKV133, $pvKV134, $pvKV135, $pvKV136, $pvKV137, $pvKV138, $pvKV140, $pvKV141, $pnFV500, $pvLOGIN);
    }

    private function nkub_inserttabn100($data) {
        $pnPN100 = isset($data['PN100']) ? $data['PN100'] : 0;
        $pvNV101 = isset($data['NV101']) ? $data['NV101'] : '';
        $pvNV102 = isset($data['NV102']) ? $data['NV102'] : '';
        $pvNV103 = isset($data['NV103']) ? $data['NV103'] : '';
        $pvNV106 = isset($data['NV106']) ? $data['NV106'] : '';
        $pvNV107 = isset($data['NV107']) ? $data['NV107'] : '';
        $pvNV108 = isset($data['NV108']) ? $data['NV108'] : '';
        $pnNN109 = isset($data['NN109']) ? $data['NN109'] : 0;
        $pnNN110 = isset($data['NN110']) ? $data['NN110'] : 0;
        $pnNN111 = isset($data['NN111']) ? $data['NN111'] : 0;
        $pnFN600 = isset($data['FN600']) ? $data['FN600'] : 0;
        $pnFK100 = isset($data['FK100']) ? $data['FK100'] : 0;
        $pvLOGIN = isset($data['LOGIN']) ? $data['LOGIN'] : '';
        return $this->N100_MODEL->nkub_inserttabn100($pnPN100, $pvNV101, $pvNV102, $pvNV103, $pvNV106, $pvNV107, $pvNV108, $pnNN109, $pnNN110, $pnNN111, $pnFN600, $pnFK100, $pvLOGIN);
    }

    private function loadTemplateView($page, $data) {
        $this->load->view('header');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

}
