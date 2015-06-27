<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Article_model extends  CI_Model{
		
	public function get_all_articles(){
		$this -> db -> select("*");
		$this -> db -> from("t_articles");
		$this -> db -> order_by("article_date", "desc");
		return $this -> db -> get() -> result();
	}
	
	public function get_articles_num(){
		return $this -> db -> get("t_articles") -> num_rows(); 
	}
	
	public function get_match_articles_num($keyword){
		$this -> db -> select("*");
		$this -> db -> from("t_articles");
		$this -> db -> like("article_title", $keyword);
		return $this -> db -> get() -> num_rows();
	}
	
	public function get_five_articles(){
		$this -> db -> select("*");
		$this -> db -> from("t_articles");
		$this -> db -> order_by("article_date", "desc");
		$this -> db -> limit(5);
		return $this -> db -> get() -> result();
	}
	
	public function get_articles_by_tag_id($tag_id){
		$this -> db -> select("*");
		$this -> db -> from("t_article_tag at");
		$this -> db -> join("t_articles a", "a.article_id=at.article_id");
		$this -> db -> where("at.tag_id", $tag_id);
		$this -> db -> limit(5);
		return $this -> db -> get() -> result();
	}
	
	public function save_article($article_title, $article_content, $article_date){
		$this -> db -> insert("t_articles", array(
			"article_title" => $article_title,
			"article_content" => $article_content,
			"article_date" => $article_date
		));
		return $this -> db -> insert_id();
	}
	
	public function update_article($article_id, $article_title, $article_content){
		$this -> db -> where("article_id", $article_id);
		$this -> db -> update("t_articles", array(
			"article_title" => $article_title,
			"article_content" => $article_content
		));
	}
	
	public function del($article_id){
		$this -> db -> delete("t_articles", array(
			"article_id" => $article_id
		));
	}
	
	public function del_article_tags_by_article_id($article_id){
		$this -> db -> delete("t_article_tag", array(
			"article_id" => $article_id
		));
	}
	
	public function add_article_tag($article_id, $tag_id){
		$this -> db -> insert("t_article_tag", array(
			"article_id" => $article_id,
			"tag_id" => $tag_id
		));
	}
	
	public function get_article_by_article_id($article_id){
		$this -> db -> set("article_views", "article_views+1", FALSE);
		$this -> db -> where("article_id", $article_id);
		$this -> db -> update("t_articles");
		return $this -> db -> get_where("t_articles", array(
			"article_id" => $article_id
		)) -> row();
	}
	
	public function zan($article_id){
		$this -> db -> set("article_zan", "article_zan+1", FALSE);
		$this -> db -> where("article_id", $article_id);
		$this -> db -> update("t_articles");
		return $this -> db -> affected_rows();
	}
	
	public function search($start, $pagesize, $keyword){
		$this -> db -> select("*");
		$this -> db -> from("t_articles");
		$this -> db -> like("article_title", $keyword);
		$this -> db -> limit($pagesize, $start);
		$this -> db -> order_by("article_date", "desc");
		return $this -> db -> get() -> result();
	}

}
