<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospitals extends CI_Controller {
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
		$this->load->model('hospitals_model');

		$data["hospitals"]=[];
		$data["hospitals"]["India"] = $this->hospitals_model->get_popular_hospitals_by_specific_country("India");
		$data["hospitals"]["Turkey"] = $this->hospitals_model->get_popular_hospitals_by_specific_country("Turkey");
		$data["hospitals"]["Thailand"] = $this->hospitals_model->get_popular_hospitals_by_specific_country("Thailand");
		// $this->load->model('news_model');	
		// $data['news'] = $this->news_model->get_recent_news();

		// $this->load->model('blogs_model');	
		// $data['blogs'] = $this->blogs_model->get_recent_blogs();

		// $this->load->model('testimonials_model');	
		// $data['testimonials'] = $this->testimonials_model->get_recent_testimonials();
		$this->load->view('head2', );
		$this->load->view('header',$headerData);
		$this->load->view('hospitals',$data );
		$this->load->view('footer');
	}



}
