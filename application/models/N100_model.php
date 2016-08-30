<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Description of K100_model
 *
 * @author hp
 */
class N100_model extends CI_Model{
    //put your code here
    
     public function nkub_inserttabn100( $pnPN100, $pvNV101, $pvNV102, $pvNV103, $pvNV106, $pvNV107, $pvNV108, $pnNN109, $pnNN110, $pnNN111,$pnFN600, $pnFK100, $pvLOGIN){
        $query = "SELECT nkub_inserttabn100($pnPN100, '$pvNV101', '$pvNV102', '$pvNV103', '$pvNV106', '$pvNV107', '$pvNV108', $pnNN109, $pnNN110, $pnNN111, $pnFN600, $pnFK100, '$pvLOGIN')";
        $result = $this->db->query($query);
        return $result ? get_record_value($result) : 0;
    }
    
    public function nkub_listoftabn100($pnPN100, $pvSEARC,$pvLOGIN) {
        $query = "CALL nkub_listoftabn100($pnPN100, '$pvSEARC',  '$pvLOGIN')";
        $result = $this->db->query($query);
        return $result->result_array();
    }
}
