<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Tag_model extends  CI_Model{
	
	public function get_all_tags(){
		return $this -> db -> get("t_tags") -> result();
	}
	
	public function get_five_tags(){
		return $this -> db -> get("t_tags", 5) -> result();
	}
	
	public function get_tags_by_article_id($article_id){
		$this -> db -> select("at.*, t.*");
		$this -> db -> from("t_article_tag at");
		$this -> db -> join("t_tags t", "t.tag_id=at.tag_id");
		$this -> db -> where("at.article_id", $article_id);
		return $this -> db -> get() -> result();
	}
	
	public function save_tags($tag_name){
		$this -> db -> insert("t_tags", array(
			"tag_name" => $tag_name
		));
	}
	
	public function get_tag_by_tag_id($tag_id){
		return $this -> db -> get_where("t_tags", array(
			"tag_id" => $tag_id
		)) -> row();
	}
	
	public function update_tags($tag_id, $tag_name){
		$this -> db -> set("tag_name", $tag_name);
		$this -> db -> where("tag_id", $tag_id);
		$this -> db -> update("t_tags");
	}
		
}
