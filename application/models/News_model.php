<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_recent_news() {
        $query="SELECT id,image,topic,title FROM news order by created_on desc limit 4";  
        return $this->db->query($query)->result_array();
    }

    public function get_specific_news($id) {
        $query="SELECT news.*, authors.name AS author_name, authors.about AS author_about, authors.image as author_image
                FROM news
                INNER JOIN authors ON news.author_id = authors.id
                WHERE news.id = $id;";  
        return $this->db->query($query)->result_array();
    }


  

    
}