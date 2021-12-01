<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('CRUD');
        $this->load->model('Admin/M_barang');
        $this->load->model('Admin/M_user');
        
    }
    public function index()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jumlah'] = $this->M_barang->jumlahBarang();
        $data['data_user'] = $this->M_user->getAllUser();
        
        $this->load->view('template/head', $data);
        $this->load->view('Admin/_partials/sidebar', $data);
        $this->load->view('Admin/_partials/navbar', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('template/foot');
    }

    public function barang()
    {
        $data['barang'] = $this->M_barang->select_all();
        $data['title'] = 'Produk Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/head', $data);
        $this->load->view('Admin/_partials/sidebar', $data);
        $this->load->view('Admin/_partials/navbar', $data);
        $this->load->view('Admin/barang', $data);
        $this->load->view('template/foot');
    }

    public function tambahBarang()
    {
        $dataBarang = $this->input->post();
        
        $location = 'admin_assets/FotoBarang/';
        for ($i=1; $i<3; $i++){
            $file_name = $_FILES['foto'.$i]['name'];
            $tmp_name = $_FILES['foto'.$i]['tmp_name'];
            $type = $_FILES['foto'.$i]['type'];

            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            $file_foto = random_int(0, 999). "_".$i.".".$ext;
            if($file_name != NULL){
                move_uploaded_file($tmp_name, $location.$file_foto);

                $_FILES['foto'.$i]['name'] = $file_foto;
            }
        }
        $data = array('nama' => $dataBarang['nama'],
                    'harga' => $dataBarang['harga'],
                    'stok' => $dataBarang['stok'],
                    'keterangan' => $dataBarang['keterangan'],
                    'foto1' => $_FILES['foto1']['name'],
                    'foto2' => $_FILES['foto2']['name'],
                    'status' => 1);
        $this->CRUD->insert('barang', $data);
        
        redirect('Admin/Page/barang','refresh');
        
    }
    public function updateBarang()
    {
        $dataBarang = $this->input->post();
        $kodeBarang = $dataBarang['kode'];
        

        $location = 'admin_assets/FotoBarang/';
        for ($i=1; $i<3; $i++){
            $file_name = $_FILES['foto'.$i]['name'];
            $tmp_name = $_FILES['foto'.$i]['tmp_name'];
            $type = $_FILES['foto'.$i]['type'];

            $ext = pathinfo($file_name, PATHINFO_EXTENSION);

            $file_foto = random_int(0, 999). "_".$i.".".$ext;
            if($file_name != NULL){
                unlink($location.$file_foto);
                move_uploaded_file($tmp_name, $location.$file_foto);

                $_FILES['foto'.$i]['name'] = $file_foto;
            }
        }
        $data = array('kode' => $kodeBarang,
                    'nama' => $dataBarang['nama'],
                    'harga' => $dataBarang['harga'],
                    'stok' => $dataBarang['stok'],
                    'keterangan' => $dataBarang['keterangan'],
                    'foto1' => $_FILES['foto1']['name'],
                    'foto2' => $_FILES['foto2']['name'],
                    'status' => 1);
        
        $this->M_barang->updateBarangByKode('barang', $data, $kodeBarang);
        redirect('Admin/Page/barang','refresh');
    }

    public function deleteBarang($kodeBarang)
    {
        $where = array('kode' => $kodeBarang);
        $this->M_barang->hapusBarang($where, 'barang');
        redirect('Admin/Page/barang','refresh');
    }
}