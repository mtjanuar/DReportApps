<?php

class Cviewreport_model extends CI_Model {
    function __construct() { parent::__construct(); } function getAllCviewreport() {
		//select semua data yang ada pada table msProduct $this--->db->select("*");
        
        $sql= "SELECT karyawan.NIP AS aa, karyawan.nama AS bb, divisi.nama AS cc, laporan_utama.nama as dd
FROM karyawan, laporan_utama, detail_laporan_karyawan,divisi
WHERE karyawan.NIP = detail_laporan_karyawan.NIP AND detail_laporan_karyawan.id_laporan = laporan_utama.id_laporan AND divisi.id_divisi = karyawan.id_divisi AND karyawan.NIP =1011

";
        

		        $result = $this->db->query($sql);
                $result = $result->result();
                return $result; 

	}
    
    
    
}