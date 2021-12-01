<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin/M_barang');
        
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['barang'] = $this->M_barang->select_all();
        
        $this->load->view('Home/index', $data);
        
    }
}