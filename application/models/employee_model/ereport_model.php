<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ereport_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
     
    function getReport(){
        $ses_id = $this->session->userdata('username');
        $sql = "select lu.nama as judul_laporan, lu.deskripsi as deskripsi, lu.tgl_laporan as tgl
                from laporan_utama lu, detail_laporan_karyawan dlk, karyawan k
                where lu.id_laporan = dlk.id_laporan and k.nip = dlk.nip and k.username='$ses_id'";
        
        $result = $this->db->query($sql);
        $result = $result->result();
        return $result; 
    }
     
    
    
}

?>