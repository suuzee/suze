<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Admin_model extends  CI_Model{
		
	public function get_by_name_password($admin_name, $admin_password){
		return $this -> db -> get_where('t_admin', array(
			"admin_name" => $admin_name,
			"admin_password" => $admin_password
		)) -> row();
	}
		
}
