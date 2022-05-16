<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }


    function privacy_policy(){
        $this->load->view('website/privacy_policy');
    }
}