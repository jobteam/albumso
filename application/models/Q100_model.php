<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Description of K100_model
 *
 * @author hp
 */
class Q100_model extends CI_Model {

    //put your code here

    public function qkub_inserttabq100($pnPQ100, $pvQV101, $pvQV102, $pvQV106, $pnFS200, $pnFB050, $pnFN100, $pnFK100, $pvSOURC, $pvLOGIN) {
        $query = "SELECT qkub_inserttabq100('$pnPQ100', '$pvQV101', '$pvQV102', '$pvQV106', '$pnFS200', '$pnFB050', '$pnFN100', '$pnFK100', '$pvSOURC', '$pvLOGIN')";
        $result = $this->db->query($query);
        return $result ? get_record_value($result) : 0;
    }
    
    public function qkub_checktabq100($pvQV101, $pvQV102,$pvCTYPE, $pvLOGIN) {
        $query = "CALL qkub_checktabq100('$pvQV101', '$pvQV102', '$pvCTYPE',  '$pvLOGIN')";
        $result = $this->db->query($query);
        return $result->result_array();
    }

}
