<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_patient($arr){
       $query="INSERT INTO patients 
        (name, email, country, city, state, country_phone_code, phone_number, fees, medical_problems, age) 
        VALUES 
        (
            '".$arr['name']."', 
            '".$arr['email']."', 
            '".$arr['country']."', 
            '".$arr['city']."', 
            '".$arr['state']."', 
            '".$arr['country_phone_code']."', 
            '".$arr['phone_number']."', 
            '".$arr['fees']."', 
            '".$arr['medical_problems']."', 
            '".$arr['age']."'
        )";
        $this->db->query($query);
        if($this->db->affected_rows() > 0) {
            return array('status' => true, 'insert_id' => $this->db->insert_id());
        } else {
            return array('status' => false, 'error' => $this->db->error());
        }
    } 
}