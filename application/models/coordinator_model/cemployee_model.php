<?php

class Cemployee_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllEmployee() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        $ses_id = $this->session->userdata('username');
        $sql= "SELECT karyawan.NIP as nip, karyawan.nama AS nama, karyawan.email as email
FROM karyawan,divisi
WHERE divisi.id_divisi = karyawan.id_divisi AND divisi.id_divisi = (SELECT karyawan.id_divisi FROM karyawan WHERE karyawan.username= '$ses_id') AND karyawan.username != '$ses_id'";
        

		        $result = $this->db->query($sql);
                $result = $result->result();
                return $result; 

	}
    
    
    
   
    
   
    
    
}
    
