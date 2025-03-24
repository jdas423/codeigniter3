<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	public $hospitals_model;
    public $news_model;
    public $blogs_model;
    public $testimonials_model;	
	
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
		
		$data["hospitals_by_country"] = $this->hospitals_model->get_hospitals_by_country();
		
		$this->load->model('news_model');	
		$data['news'] = $this->news_model->get_recent_news();

		$this->load->model('blogs_model');	
		$data['blogs'] = $this->blogs_model->get_recent_blogs();

		$this->load->model('testimonials_model');	
		$data['testimonials'] = $this->testimonials_model->get_recent_testimonials();
		
		$this->load->view('head1');
		$this->load->view('header',$headerData);
		$this->load->view('index', $data);
		$this->load->view('footer',$data);
	}
}
