<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    public function index()
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('User/index', $data);
        $this->load->view('template/foot');
        
        
    }
}