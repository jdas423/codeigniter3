<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospitals_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_countries_departments() {

        $query="SELECT DISTINCT
        JSON_UNQUOTE(JSON_EXTRACT(department, CONCAT('$[', idx, ']'))) AS department_name, 
        hospitals.country
        FROM hospitals
        JOIN (
            SELECT 0 AS idx UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4
            UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9
        ) AS indices
        WHERE JSON_EXTRACT(department, CONCAT('$[', idx, ']')) IS NOT NULL;";
      
        
        return $this->db->query($query)->result_array();
    }
  
    public function get_hospitals_by_country() {
        $query="SELECT DISTINCT country FROM hospitals";
        $country_arr=$this->db->query($query)->result_array();
        $res_arr=[];
        $h_arr=[];
        foreach($country_arr as $c){
            if($c['country']=="India"){
                $query="SELECT name,images,city,id FROM hospitals WHERE country='".$c['country']."'order by hospital_rating desc limit 4";
            }
            else{
                $query="SELECT name,images,city,id FROM hospitals WHERE country='".$c['country']."'order by hospital_rating desc limit 2";
            }
            $hospitals=$this->db->query($query)->result_array();
            foreach($hospitals as $h){
                array_push($h_arr,$h);
            }
            $res_arr[$c['country']]=$h_arr;
            $h_arr=[];
        }
       return $res_arr;
    }

    public function get_popular_hospitals_by_specific_country($country){
        $query="SELECT DISTINCT name FROM hospitals where country='$country' order by hospital_rating desc limit 10";
        return $this->db->query($query)->result_array();
    }

    public function get_popular_hospitals_by_specific_city($country,$city){
        $query="SELECT name, MIN(id) as id 
            FROM hospitals 
            WHERE country='$country' AND city='$city' 
            GROUP BY name 
            ORDER BY MAX(hospital_rating) DESC 
            LIMIT 10";
        return $this->db->query($query)->result_array();
    }
    public function get_hospital_by_id($id){
        $query="SELECT * FROM hospitals where id='$id'";
        return $this->db->query($query)->result_array();
    }
    
}
