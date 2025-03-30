<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultonline extends CI_Controller {
    public $hospitals_model;
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('date');
    }

    public function index()
	{
		$this->load->view('consult_online', );
	}



}
