<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class B050_model extends CI_Model{

    public function stdb_tools_inserttabb050($pnPB050, $pvBV051, $pvBV052, $pvBV053, $pvBV054, $pvBV055, $pvBV056, $pvBV057, $pvBV058, $pvBV059, $pvBV060, $pvBV061, $pvBV062, $pvBV063, $pvBV064, $pvBV065, $pvBV066, $pvBV067, $pvBV068, $pvBV069, $pvBV093, $pvBV094, $pnFS300, $pnFS200, $pnFM100, $pnFK100, $pvLOGIN){
        $query = "SELECT stdb_tools_inserttabb050($pnPB050, '$pvBV051', '$pvBV052', '$pvBV053', '$pvBV054', '$pvBV055', '$pvBV056', '$pvBV057', '$pvBV058', '$pvBV059', '$pvBV060', '$pvBV061', '$pvBV062', '$pvBV063', '$pvBV064', '$pvBV065', '$pvBV066', '$pvBV067', '$pvBV068', '$pvBV069', '$pvBV093', '$pvBV094', $pnFS300, $pnFS200, $pnFM100, $pnFK100, '$pvLOGIN')";
//        echo $query;die;
        $result = $this->db->query($query);
        return $result ? get_record_value($result) : 0;
    }

    
}
