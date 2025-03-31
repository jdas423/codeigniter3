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
		$this->load->view('head_hospitals', );
		$this->load->view('header',$headerData);
		$this->load->view('hospitals',$data );
		$this->load->view('footer');
	}

	public function hospital($id)
	{
		$headerData = load_header_data();
		$this->load->model('hospitals_model');
		$data["hospital"] = $this->hospitals_model->get_hospital_by_id($id);
		$this->load->view('head_individual_hospital', );
		$this->load->view('header',$headerData);
		$this->load->view('individual_hospital',$data );
		$this->load->view('footer');
	}

	public function hospitals_country_dept($country,$dept)
	{
		$headerData = load_header_data();
		$this->load->model('hospitals_model');
		// $data["hospital"] = $this->hospitals_model->get_hospital_by_id($id);
		$this->load->view('head_hospitals_country_dept', );
		$this->load->view('header',$headerData);
		$this->load->view('hospitals_country_dept');
		$this->load->view('footer');
	}





}
