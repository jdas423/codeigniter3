<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
     
    public function get_doctor_by_id($id){
        $query="SELECT doctors.*,hospitals.name as hospital_name,hospitals.images as hospital_image_arr,hospitals.address as hospital_address,
        hospitals.city as hospital_city,hospitals.id as hospital_id,hospitals.country as hospital_country
         FROM doctors inner join hospitals on 
         doctors.working_hospital_id=hospitals.id where doctors.id='$id'";
        
        return $this->db->query($query)->result_array();
    }

    public function get_popular_doctors_by_profile_city($profile,$city,$country){
        $query="select doctors.*, hospitals.name as hospital_name, hospitals.city as city,hospitals.country as country
          from doctors inner join hospitals on hospitals.id=doctors.working_hospital_id
         where profile='$profile' and city='$city' and country='$country' order by ratings desc";
        
        return $this->db->query($query)->result_array();
    }

    public function insert_doctor($arr){
        $query="INSERT INTO doctors (
            name,
            qualifications,
            surgeries,
            designation,
            ratings,
            working_hospital_id,
            about,
            fees,
            medical_problems,
            medical_procedures,
            education_and_training,
            honours_and_awards,
            work_experience,
            related_video,
            profile,
            year_of_experience,
            no_of_ratings,
            faq,
            schedule,
            image
        ) VALUES (
             '".$this->db->escape_str($arr['name'])."',
            '".$this->db->escape_str($arr['qualifications'])."',
            '".$this->db->escape_str($arr['surgeries'])."',
            '".$this->db->escape_str($arr['designation'])."',
            ".floatval($arr['ratings']).",
            ".intval($arr['working_hospital_id']).",
            '".$this->db->escape_str($arr['about'])."',
            ".$this->db->escape_str($arr['fees']).",
            '".$this->db->escape_str($arr['medical_problems'])."',
            '".$this->db->escape_str($arr['medical_procedures'])."',
            '".$this->db->escape_str($arr['education_and_training'])."',
            '".$this->db->escape_str($arr['honours_and_awards'])."',
            '".$this->db->escape_str($arr['work_experience'])."',
            '".$this->db->escape_str($arr['related_video'])."',
            '".$this->db->escape_str($arr['profile'])."',
            ".intval($arr['year_of_experience']).",
            ".intval($arr['no_of_ratings']).",
            '".$this->db->escape_str($arr['faq'])."',
            '".$this->db->escape_str($arr['schedule'])."',
            '".$this->db->escape_str($arr['image'])."'
        );";
                
        $result = $this->db->query($query);

        if ($result) {
            return [
                'status' => true,
                'insert_id' => $this->db->insert_id()
            ];
        } else {
            return [
                'status' => false,
                'error' => $this->db->error()
            ];
        }
            }

}
