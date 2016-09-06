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
        
        $arrBV053 = array();
        array_push($arrBV053, array("name" => "thopp1", "age" => 18), array("name" => "thopp1", "age" => 18));
//        echo '<pre>';
//        var_dump(json_encode($arrBV053));die;
        $arrBV055 = array("name",  "age");
        $arrBV057 = array("name" => "thopp3", "age" => 18);
        return $this->B050_MODEL->balbumso_inserttabb050(0, 'ten package co dau', 'ten package khong dau', json_encode($arrBV053), 'rating', json_encode($arrBV055), 'image mac dinh show web', json_encode($arrBV053), 'chi tiet noi dung', 'firen dus', 'TUNGBFBF', 200, 1, 'topptest');
    }
    
    
    public function getFiendlyUrl(){
        $this->load->helper('my');
        echo $this->slugify(convert_vi_to_en('500 anh em cố lên nhé'));
    }
    
    private function slugify($text) {
        try {
            // replace all non letters or digits with -
            $text = preg_replace('/\W+/', '-', $text);
            // trim and lowercase
            $text = strtolower(trim($text, '-'));
            return $text;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
