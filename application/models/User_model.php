<?php
class User_model extends CI_Model{
    function return_users(){
    	$this->load->database();

    	// $query = $this->db->query("SELECT * from user");
    	$query = $this->db->get_where('user',array('id'=>'1'));
        return $query->result_array();
    }
}