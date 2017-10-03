<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');

class Model_login extends  CI_Model {
	
	
	
	function login_chk($username,$password){
            //var_dump($username,$password);die;
			return $this->db->where('username',$username)->where('password',$password)->get('users')->row_array();
		
	}
	
}