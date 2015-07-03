<?php

class Employee_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllEmployee() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        $this->db->from("employee");
        

		return $this->db->get();
	}
    
    function getByDepartement(){
        $action = $this->input->post('action');
		if ($action == "delete") {
			$delete = $this->input->post('msg');
			for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('nis', $delete[$i]);
				$this->db->delete('siswa');
			}
		}
    
    
    }
    
    
    
}