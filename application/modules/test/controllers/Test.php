<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'controllers/ALBUMSO.php');

class Test extends ALBUMSO {

    public function index() {
       echo 'Hello Tungns';
    }
    
    
    public function test1() {
       $abc = $this->kalbumso_inserttabk100();
       var_dump($abc);
    }
    /*
* Create Provider
* pnPK100 id
* pnKV101 ten provider
* pnKV102 email 
* pnKV103 dang o goi nao (free, premium, pro)
* pnKV104 Dia chi
* pnKV105 Phone
* pnFN750 Quoc Gia
* pnFN800 Thanh Pho
* pnFN850 Quan , Thanh
* pvKL195 Date Delete
* pvKL196 Date Create
* pvKL197 Nguoi tao
*/
    private function kalbumso_inserttabk100() {
        $this->load->model('k100_model', 'K100_MODEL');
        return $this->K100_MODEL->kalbumso_inserttabk100(0, 'Giann Pham Gia', 'email', 'dang o goi nao', 'Dia chi', 'Phone', 1, 2, 3, 'LOGIN');
    }
    
    //////////////////////thopp test nhé....
    
    
    public function thopp(){
        var_dump($this->balbumso_inserttabb050());
    }
    private function balbumso_inserttabb050(){
        $this->load->model('B050_model', 'B050_MODEL');
        $arrBV053 = array("name" => "thopp1", "age" => 18);
        $arrBV055 = array("name" => "thopp2", "age" => 18);
        $arrBV057 = array("name" => "thopp3", "age" => 18);
        return $this->B050_MODEL->balbumso_inserttabb050(0, 'ten package co dau', 'ten package khong dau', $arrBV053, 'rating', $arrBV055, 'image mac dinh show web', $arrBV057, 'chi tiet noi dung', 200, 1, 'topptest');
    }

}
