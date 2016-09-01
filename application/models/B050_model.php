<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class B050_model extends CI_Model{
    private $db;
    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->db = $this->mongo_db->getDb();
    }
    public function balbumso_inserttabb050($pnPB050, $pvBV051, $pvBV052, $arrBV053, $pvBV054, $arrBV055, $pvBV056, $arrBV057, $pvBV058, $pnFB200, $pnFK100, $pvLOGIN){
        try {
            $response = $this->db->execute("balbumso_inserttabb050($pnPB050, '$pvBV051', '$pvBV052', '$arrBV053', '$pvBV054', '$arrBV055', '$pvBV056', '$arrBV057', '$pvBV058', $pnFB200, $pnFK100, '$pvLOGIN')");
            return $response;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
}
