<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {
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
		$this->load->view('head_blogs', );
		$this->load->view('header',$headerData);
		$this->load->view('blogs' );
		$this->load->view('footer');
	}

	public function blog($id)
	{
		$headerData = load_header_data();
		$this->load->model('blogs_model');
		$data["blog"] = $this->blogs_model->get_blog_by_id($id);
		$this->load->view('head_individual_blog', );
		$this->load->view('header',$headerData);
		$this->load->view('individual_blog',$data );
		$this->load->view('footer');
	}


}
