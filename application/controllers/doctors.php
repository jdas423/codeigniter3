<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('header');
    }

    public function index()
	{
		$headerData = load_header_data();

		$this->load->view('head_doctors', );
		$this->load->view('header',$headerData);
		$this->load->view('doctors' );
		$this->load->view('footer');
	}



}
