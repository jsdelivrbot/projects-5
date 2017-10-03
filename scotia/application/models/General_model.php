<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class General_model extends CI_Model {
    
    public function getAdvisors(){
        return $this->db->where('active','1')->get('advisors')->result_array(); ;
    }
    public function getMessages(){
        return $this->db->order_by('datetime' , 'asc')->get('messages')->result_array();
    }
}