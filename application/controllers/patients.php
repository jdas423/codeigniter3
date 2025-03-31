<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {
    public $patients_model;
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('header');
    }

    public function post_details(){
        $this->load->model('patients_model');
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $arr=[];
            $arr['name'] = $this->input->post('name');
            $arr['email'] = $this->input->post('email');
            $arr['country']=$this->input->post('country');
            $arr['city']=$this->input->post('city');
            $arr['state']=$this->input->post('state');
            $arr['country_phone_code']=$this->input->post('country_phone_code');
            $arr['phone_number']=$this->input->post('phone_number');
            $arr['fees']=$this->input->post('fees');
            $arr['medical_problems']=$this->input->post('medical_problems');
            $arr['age']=$this->input->post('age');
          
            $ret=$this->patients_model->insert_patient($arr);
            if($ret['status']) {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'success' => true,
                        'message' => 'Patient added successfully',
                        'insert_id' => $ret['insert_id']
                    ]));
            } else {
                $this->output
                    ->set_status_header(500)
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'success' => false,
                        'error' => 'Database error: ' . $ret['error']['message']
                    ]));
            }
            
        }
        else{
            show_error('Method not allowed', 405);
        }
    }
   


}
