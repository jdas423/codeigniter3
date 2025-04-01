<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {
    public $hospitals_model;
	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('header');
    }

    public function index($category=null)
	{
		$headerData = load_header_data();
		$this->load->model('blogs_model');
		$data["c"]=false;
		$data["specific_blogs"]=[];
		if($category){
			$data["specific_blogs"]=$this->blogs_model->get_specific_category_blogs($category);
			$data["c"]=true;
		}	
		$data["blogs"]=$this->blogs_model->get_recent_blogs_with_author();
		$data["categories"]=$this->blogs_model->get_categories();
		$this->load->view('head_blogs', );
		$this->load->view('header',$headerData);
		$this->load->view('blogs',$data );
		$this->load->view('footer');
	}

	public function blog($id)
	{
		$headerData = load_header_data();
		$this->load->model('blogs_model');
		$data["blog"] = $this->blogs_model->get_blog_by_id($id)[0];
		$data["blogs"][]=$this->blogs_model->get_blog_by_id(2);
		$data["blogs"][]=$this->blogs_model->get_blog_by_id(3);
		$data["recent_blogs"]=$this->blogs_model->get_recent_blogs();
		$this->load->view('head_individual_blog', );
		$this->load->view('header',$headerData);
		$this->load->view('individual_blog',$data );
		$this->load->view('footer');
	}

	public function load_more($limit,$offset,$category=null){
		$this->load->model('blogs_model');
		if($category){
			$data=$this->blogs_model->get_specific_blogs_offset_lim($limit,$offset,$category);		
		}	
		else{
			$data=$this->blogs_model->get_specific_blogs_offset_lim($limit,$offset,$category);
		}

		$str="";
	    foreach($data as $b){
			$str=$str.'<div class="article-card-p">
			<div class="article-card reverse-on-mobile">
				<div class="article-list-details">
					<h2 class="h4"><a
							href="'.base_url("blogs/blog/").$b["id"].'"
							>'.$b["topic"].'</a></h2> <!-- <p class="intro"><strong>By:</strong> shraddha</p> --> <span
						class="article-card-sub-text">
						<p class="category"><strong>Category:</strong> <a href="#"
								title="Cancer">'.$b["category"].'</a></p>
						<p class="last-update"><strong>Last Updated Date:</strong> '.(new DateTime($b["updated_on"]))->format('d F,Y').'</p>
						<p class="last-update"><strong>Created Date:</strong> '.(new DateTime($b["created_on"]))->format('d F,Y').'</p>
					</span>
				</div>
				<div class="article-list-img">
						<img alt="'.$b["topic"].'"
							src="'.$b["image"].'" style="width:100%;height:100%;">
				</div>
			</div>
		</div>';
		}
		$response = array(
			'success' => true,
			'str' => $str,
			'hasMore'=> count($data) <$limit ? false : true
		);
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}


}
