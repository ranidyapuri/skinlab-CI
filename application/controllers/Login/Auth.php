<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if($this->session->userdata('email')){
            redirect('User/Page/');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false){
            $this->load->view('Auth/login');
        }else{
            $this->_login();
        }
    }

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        if($user){
            //usernya ada
            if($user['is_active']){
                if(password_verify($password, $user['password'])){
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if($user['role_id'] == 1){
                        redirect('Admin/Page/');
                    }else{
                        redirect('User/Page/');
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your Password is incorrect.</div>');
                    redirect('Login/Auth/');
                }
            }
        }else{
            //user gaada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This Email is not registered yet.</div>');
            redirect('Login/Auth/');
        }
    }

    public function register()
    {
        if($this->session->userdata('email')){
            redirect('User/Page/');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This Email is already registered, please choose another one.']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => "Your Password doesn't match.", 'min_length' => 'Your Password should be at least 3.']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false){
            $this->load->view('Auth/register');
        }else{
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', 'true')),
                'email' => htmlspecialchars($this->input->post('email', 'true')),
                'foto' => 'default.svg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account have been created successfully, please login.</div>');
            redirect('Login/Auth/');
        }
        
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account have been logged out.</div>');
        redirect('index.php/Login/Auth/');
    }


}