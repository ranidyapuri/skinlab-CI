<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Model{
    function insert($tabel, $data){
        $cek = $this->db->insert($tabel, $data);
        return $cek;
        
    }
}