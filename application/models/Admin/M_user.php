<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{
    public function getAllUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id != 1');
        
        $data = $this->db->get();
        return $data->result_array();
    }
}