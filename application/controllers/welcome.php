<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this -> load -> model('article_model');
		$this -> load -> model('tag_model');
		header('content-type:text/html; charset=utf-8');
	}
	
	public function index() {
		$articles = $this -> article_model -> get_five_articles();
		$five_tags = $this -> tag_model -> get_five_tags();
		$tags = $this -> tag_model -> get_all_tags();
		$data = array(
			"articles" => $articles,
			"five_tags" => $five_tags,
			"tags" => $tags
		);
		$this -> load -> view('index', $data);
	}
	
	public function articles($article_id){
		
		$article = $this -> article_model -> get_article_by_article_id($article_id);
		$article_tags = $this -> tag_model -> get_tags_by_article_id($article_id);
		$tags = $this -> tag_model -> get_all_tags();
		$data = array(
			"article" => $article,
			"article_tags" => $article_tags,
			"tags" => $tags
		);
		$this -> load -> view("articles", $data);
	}
	public function tags($tag_id){
		$five_tags = $this -> tag_model -> get_five_tags();
		$articles = $this -> article_model -> get_articles_by_tag_id($tag_id);
		$tags = $this -> tag_model -> get_all_tags();
		$data = array(
			"articles" => $articles,
			"five_tags" => $five_tags,
			"tags" => $tags
		);
		$this -> load -> view("tags", $data);
	}
	
	public function zan(){
		$article_id = $this -> input -> get("article_id");
		$row = $this -> article_model -> zan($article_id);
		if($row){
			echo "success";
		} else{
			echo "fail";
		}
	}

	public function search(){
		$five_tags = $this -> tag_model -> get_five_tags();
		$tags = $this -> tag_model -> get_all_tags();
		$keyword = $this -> input -> get("keyword");
		$page = $this -> input -> get('per_page');
        if (empty($page)) {
            $page = 0;
        }
		$total = $this -> article_model -> get_match_articles_num($keyword);
		$config['base_url'] = site_url('search?');
		$config['total_rows'] = $total;
		$config['per_page'] = 1;
		$config['first_link'] = '<<';
		$config['last_link'] = '>>';
		$config['next_link'] = '>';
		$config['prev_link'] = '<';
		$config['page_query_string'] = TRUE;
		$config['full_tag_open'] = '<ul>';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="curent"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['base_url'].= "keyword=".$keyword;
		$this -> pagination -> initialize($config);
		$articles = $this -> article_model -> search($page, $config['per_page'], $keyword);
		$data = array(
			"articles" => $articles,
			"total" => $total,
			"pagesize" => $config['per_page'],
			"five_tags" => $five_tags,
			"tags" => $tags
		);
		$this -> load -> view("results", $data);
	}
	
}