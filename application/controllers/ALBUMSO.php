<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ALBUMSO extends CI_Controller {

    public function __construct() {

        parent::__construct();
    }

    public function checkLogin() {
        if (isset($_SESSION['user']) && $_SESSION['user']['status_login'] === 1) {
            if (empty($_SESSION['user'])) {
                $_SESSION['user']['status_login'] = 0;
                return false;
            } else {
                return true;
            }
        }
        return false;
    }

    public function testen() {
        return 'Tho';
    }

}
