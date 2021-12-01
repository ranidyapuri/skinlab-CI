<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin/M_barang');
        
    }
    public function index()
    {
        $data['title'] = 'Shop';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->M_barang->select_all();
        
        $this->load->view('template/head', $data);
        $this->load->view('User/_partials/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('Shop/index', $data);
        $this->load->view('template/foot');
    }
}