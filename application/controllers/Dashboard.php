<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->_init();
    }

    private function _init()
    {
        $this->output->set_template('admin');
    }

    public function index(){
        $this->load->view('dashboard/index');
    }

    public function create(){
        $this->load->view('dashboard/index');
    }
}
