<?php

class Cdepartement_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllInfo() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        
        $sql= "SELECT divisi.nama as nama, divisi.deskripsi as deskripsi
FROM divisi
WHERE divisi.id_divisi ='1'";
        

		        $result = $this->db->query($sql);
                $result = $result->result();
                return $result; 

	}
    
    
    
   
    
   
    
    
}
    
