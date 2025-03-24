<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    public $news_model;
    public $testimonials_model;

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('header');
    }

    public function index($id)
	{
		$headerData = load_header_data();
		$this->load->model('news_model');
        $data["news"]=$this->news_model->get_specific_news($id)[0];
       
        $this->load->model('testimonials_model');
        $data["testimonials"]=array_slice($this->testimonials_model->get_recent_testimonials(),0,3);

        
        $this->load->model('blogs_model');
        $data["blogs"]=array_slice($this->blogs_model->get_recent_blogs_with_author(),0,4);
		
        $this->load->view('head1');
        $this->load->view('header',$headerData);
		$this->load->view('news',$data);
		$this->load->view('footer');
	}

    
}
