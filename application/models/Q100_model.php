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

    private $db;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->db = $this->mongo_db->getDb();
    }

    public function qalbumso_checkoftabq100($pvQV101, $pvQV102, $pvCTYPE) {
        try {
            $response = $this->db->execute("qalbumso_checkoftabq100('$pvQV101', '$pvQV102', '$pvCTYPE')");
            return $response;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
