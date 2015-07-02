<?php

class Employee_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllEmployee() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        $this->db->from("employee");
        

		return $this->db->get();
	}
    
    
    
}