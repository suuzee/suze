<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this -> load -> model('admin_model');
		$this -> load -> model('article_model');
		$this -> load -> model('tag_model');
		header('content-type:text/html; charset=utf-8');
	}
	
	public function index()
	{
		$this->load->view('admin/login');
	}
	
	public function login()
	{
		$admin_name = $this -> input -> post('admin_name');
		$admin_password = md5($this -> input -> post('admin_password'));		
		//验证
		
		$admin = $this -> admin_model -> get_by_name_password($admin_name, $admin_password);
		if($admin){
			$this -> session -> set_userdata('login_admin', $admin);
			redirect('admin/dashboard');
		}else{
			echo '<script>alert("用户名或密码错误!");location.href="../admin";</script>';
		}
	}
	
	public function logout(){
		$this -> session -> unset_userdata("login_admin");
		redirect("admin");
	}
	
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	
	public function add_article()
	{
		$tags = $this -> tag_model -> get_all_tags();
		$data = array(
			"tags" => $tags
		);
		$this -> load -> view('admin/add_article', $data);
	}
	
	public function save_article()
	{
		$article_title = $this -> input -> post("article_title");
		$article_content = $this -> input -> post("article_content");
		$article_date = date("Y-m-d H:i:s");
		$article_id = $this -> article_model -> save_article($article_title, $article_content, $article_date);
		$article_tags = $this -> input -> post("article_tags");
		foreach($article_tags as $tag_id){
			$this -> article_model -> add_article_tag($article_id, $tag_id);
		}
		redirect("admin/articles");
	}
	
	public function articles()
	{
		$articles = $this -> article_model -> get_all_articles();
		$data = array(
			"articles" => $articles
		);
		$this -> load -> view('admin/articles', $data);
	}
	
	public function del($article_id)
	{
		$this -> article_model -> del_article_tags_by_article_id($article_id);
		$this -> article_model -> del($article_id);
		redirect("admin/articles");
	}
	
	public function edit($article_id)
	{
		$tags = $this -> tag_model -> get_all_tags();
		$article = $this -> article_model -> get_article_by_article_id($article_id);
		$article_tags = $this -> tag_model -> get_tags_by_article_id($article_id);
		$this -> load -> view("admin/edit_article", array(
			"article" => $article,
			"tags" => $tags,
			"article_tags" => $article_tags
		));
	}
	
	public function do_edit($article_id){
		$article_title = $this -> input -> post("article_title");
		$article_content = $this -> input -> post("article_content");
		$this -> article_model -> update_article($article_id, $article_title, $article_content);
		$article_tags = $this -> input -> post("article_tags");
		$this -> article_model -> del_article_tags_by_article_id($article_id);
		foreach($article_tags as $tag_id){
			$this -> article_model -> add_article_tag($article_id, $tag_id);
		}
		redirect("admin/articles");
	}
	public function tags()
	{
		$tags = $this -> tag_model -> get_all_tags();
		$this -> load -> view('admin/tags', array(
			"tags" => $tags
		));
	}
	
	public function add_tags()
	{
		$this -> load -> view('admin/add_tags');
	}
	
	public function save_tags()
	{
		$tag_name = $this -> input -> post("tag_name");
		$this -> tag_model -> save_tags($tag_name);
		redirect("admin/tags");
	}
	
	public function del_tag($tag_id)
	{
		echo "<script>alert('此标签不能删除！');</script>";
		redirect("admin/tags");
	}
	
	public function edit_tag($tag_id)
	{
		$tag = $this -> tag_model -> get_tag_by_tag_id($tag_id);
		$this -> load -> view("admin/edit_tags", array(
			"tag" => $tag
		));
	}
	
	public function do_edit_tags($tag_id)
	{
		$tag_name = $this -> input -> post("tag_name");
		$this -> tag_model -> update_tags($tag_id, $tag_name);
		redirect("admin/tags");
	}
	
}