<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model{
    public function select_all()
    {
        $this->db->select('*');
        $this->db->from('barang');

        $data = $this->db->get();

        return $data->result();
    }
    function updateBarangByKode($tabel, $data, $kodeBarang){
        $this->db->where('kode', $kodeBarang);
        $cek = $this->db->update($tabel, $data);
        return $cek;
    }
    function hapusBarang($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}