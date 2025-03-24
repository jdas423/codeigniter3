<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Travelvisa extends CI_Controller {
    public $hospitals_model;
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('header');
    }

    public function index()
	{
		$headerData = load_header_data();
		$this->load->view('head_travel_visa' );
		$this->load->view('header',$headerData);
		$this->load->view('travel_visa' );
		$this->load->view('footer');
	}



}
