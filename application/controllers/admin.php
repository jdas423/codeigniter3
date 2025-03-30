<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	
	public function __construct() {
        parent::__construct();
        $this->load->model('doctors_model');		
    }


    public function get_doctor_by_id($id){
        $data=$this->doctors_model->get_doctor_by_id($id);
        if(empty($data)){
            $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'success' => false,
                    'error' => 'Doctor not found'
                ]));
            return;
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'success' => true,
                'doctor' => $data[0]
            ]));
    }

    public function index(){
        $data=[];
        $data["doctors"]=$this->doctors_model->get_doctor_details();
        $this->load->view('admin',$data);
    }


    public function handle_post() {
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $arr=[];
            $arr['name'] = $this->input->post('name');
            $arr['qualifications'] = $this->input->post('qualifications');
            $arr['surgeries']=$this->input->post('surgeries');
            $arr['designation']=$this->input->post('designation');
            $arr['ratings']=$this->input->post('ratings');
            $arr['working_hospital_id']=$this->input->post('working_hospital_id');
            $arr['about']=$this->input->post('about');
            $arr['fees']=$this->input->post('fees');
            $arr['medical_problems']=$this->input->post('medical_problems');
            $arr['medical_procedures']=$this->input->post('medical_procedures');
            $arr['education_and_training']=$this->input->post('education_and_training');
            $arr['honours_and_awards']=$this->input->post('honours_and_awards');
            $arr['work_experience']=$this->input->post('work_experience');
            $arr['related_video']=$this->input->post('related_video');
            $arr['profile']=$this->input->post('profile');
            $arr['year_of_experience']=$this->input->post('year_of_experience');
            $arr['no_of_ratings']=$this->input->post('no_of_ratings');
            $arr['faq']=$this->input->post('faq');
            $arr['schedule']=$this->input->post('schedule');
           
           
            
            $config['upload_path']   = FCPATH . 'assets/img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE; 
            
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->output
                    ->set_status_header(400)
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'success' => false,
                        'error' => 'Image upload failed!!!',
                        'validation_errors' => $error
                    ]));
                return;
            } else {
                $arr['image'] = FCPATH.'assets\\img\\'.$this->upload->data()['file_name'];
            }
            // $arr['image'] = 'assets/img/';
            $ret=$this->doctors_model->insert_doctor($arr);
            if($ret['status']) {
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode([
                        'success' => true,
                        'message' => 'Doctor added successfully',
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
