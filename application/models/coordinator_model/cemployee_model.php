<?php

class Cemployee_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllEmployee() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        
        $sql= "SELECT karyawan.NIP as nip, karyawan.nama AS nama, karyawan.email as email
FROM karyawan,divisi
WHERE divisi.id_divisi = karyawan.id_divisi AND divisi.id_divisi = 1 AND karyawan.NIP != '69'";
        

		        $result = $this->db->query($sql);
                $result = $result->result();
                return $result; 

	}
    
    
    
   
    
   
    
    
}
    
