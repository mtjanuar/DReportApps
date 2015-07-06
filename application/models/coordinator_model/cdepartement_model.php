<?php

class Cdepartement_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllInfo() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        
        $ses_id = $this->session->userdata('username');
        $sql= "SELECT divisi.nama as nama, divisi.deskripsi as deskripsi
FROM divisi, karyawan
WHERE divisi.id_divisi = karyawan.id_divisi AND karyawan.username='$ses_id'";
        

		        $result = $this->db->query($sql);
                $result = $result->result();
                return $result; 

	}
    
    
    
   
    
   
    
    
}
    
