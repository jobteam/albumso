<?php

/* 
 * Author: tungns, blog: www.tungns.top
 * Project Name: album
 * File Name: K100_model.php
 * Date: 2016.08.30
 * Time: 12.00.00
 * Copyright (C) BanhBao.
 */

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class K100_model extends CI_Model{
    private $db;
    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->db = $this->mongo_db->getDb();
    }
    

    public function kalbumso_inserttabk100($pnPK100, $pvKV101, $pvKV102, $pnKV103, $pnKV104, $pnKV105, $pnFN750, $pnFN800, $pnFN850
        , $pvLOGIN){
        try {
            $response = $this->db->execute("kalbumso_inserttabk100($pnPK100, '$pvKV101', '$pvKV102', '$pnKV103', '$pnKV104', '$pnKV105', $pnFN750, $pnFN800, $pnFN850, '$pvLOGIN')");
            return $response;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}