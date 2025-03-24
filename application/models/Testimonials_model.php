<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_recent_testimonials() {

        $query="SELECT image,topic,description,patient_name,created_on FROM testimonials order by created_on desc limit 4";  
        return $this->db->query($query)->result_array();
    }
  

    
}