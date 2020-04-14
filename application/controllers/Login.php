<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Login extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    function index(){
        $data['title'] = "Login";
        $data['meta'] = "Ini Tampilan Login";
        $this->load->view('admin/login',$data);
    }

	function aksi_login(){
        
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'email' => $username,
            'password' => $password
        );

        $cek = $this->M_login->cek_login("tb_akun",$where)->row_array();

        if($cek != NULL){
            $data_session = array(
                'email' => $cek['email'],
                'kategoriuser' => $cek['kategori_user'],
                'nama' => $cek['nama']
            );

            $this->session->set_userdata($data_session);
            redirect('Shop');
        }
        else{
            redirect('login');
        }
        
    }

    
    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-seccess" role="alert">You have been logout</div>');
        redirect('Login');
    }
 }
?>