<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {
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
		$this->load->view('head_testimonials', );
		$this->load->view('header',$headerData);
		$this->load->view('testimonials' );
		$this->load->view('footer');
	}

	public function testimonial($id)
	{
		$headerData = load_header_data();
		$this->load->model('testimonials_model');
		$data["testimonial"] = $this->testimonials_model->get_testimonial_by_id($id);
		$this->load->view('head_individual_testimonial', );
		$this->load->view('header',$headerData);
		$this->load->view('individual_testimonial',$data );
		$this->load->view('footer');
	}



}
