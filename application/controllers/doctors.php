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

	public function doctor($id)
	{
		$headerData = load_header_data();
		$this->load->model('doctors_model');
		$this->load->model('hospitals_model');
		$data["doctor"] = $this->doctors_model->get_doctor_by_id($id)[0];
		$data["popular_doctors"]=$this->doctors_model->get_popular_doctors_by_profile_city($data["doctor"]["profile"],$data["doctor"]["hospital_city"],$data["doctor"]["hospital_country"]);
		$data["popular_hospitals"]=$this->hospitals_model->get_popular_hospitals_by_specific_city($data["doctor"]["hospital_country"],$data["doctor"]["hospital_city"]);
		// print_r(($data["doctor"]));
		$this->load->view('head_individual_doctor');
		$this->load->view('header',$headerData);
		$this->load->view('individual_doctor',$data );
		$this->load->view('footer');
	}


}
