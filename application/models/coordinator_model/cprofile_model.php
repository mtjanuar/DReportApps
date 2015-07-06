<?php

class Cprofile_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllInfo() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        $ses_id = $this->session->userdata('username');
        $sql= "SELECT karyawan.nama AS name, karyawan.jenis_keamin AS gender, karyawan.tgl_lahir AS dob, karyawan.no_tlp AS hp, karyawan.email as email FROM karyawan WHERE karyawan.username='$ses_id'";
        

		        $result = $this->db->query($sql);
                $result = $result->result();
                return $result; 

	}
 
}