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
            INNER JOIN authors ON blogs.author_id = authors.id
            LIMIT 4;";
            return $this->db->query($query)->result_array();
        
    }

    public function get_blog_by_id($id){
        $query="SELECT * FROM blogs where id='$id'";
        return $this->db->query($query)->result_array();
    }
    
  

    
}