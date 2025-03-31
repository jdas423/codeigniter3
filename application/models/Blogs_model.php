<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_recent_blogs() {

        $query="SELECT image,topic,title,created_on FROM blogs order by created_on desc limit 6";  
        return $this->db->query($query)->result_array();
    }

    public function get_recent_blogs_with_author(){
            $query = "SELECT blogs.*, authors.name AS author_name
            FROM blogs
            INNER JOIN authors ON blogs.author_id = authors.id;";
            return $this->db->query($query)->result_array();
        
    }

    public function get_blog_by_id($id){
        $query="SELECT * FROM blogs where id='$id'";
        return $this->db->query($query)->result_array();
    }

    public function get_categories(){
        $query = "SELECT DISTINCT category 
                FROM blogs 
                WHERE category IS NOT NULL
                ORDER BY category ASC";
        return $this->db->query($query)->result_array();
    
      }

      public function get_specific_category_blogs($category){
        $query = "SELECT * from blogs where category='$category'";
        return $this->db->query($query)->result_array();
    
      }

      public function get_specific_blogs_offset_lim($limit,$offset,$category=null){
        if($category){
            $query = "SELECT * from blogs where category='$category' limit $limit offset $offset";
        }
        else{
            $query = "SELECT * from blogs  limit $limit offset $offset";
        }
        return $this->db->query($query)->result_array();
    
      }
    
  

    
}