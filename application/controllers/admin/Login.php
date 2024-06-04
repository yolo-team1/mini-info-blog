<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
        if (isset($_SESSION['username'])) {
            redirect('admin/dashboard');
        }

        $data=[];
        if (isset($_SESSION['error'])){
            $data['error'] = $_SESSION['error'];
        } else {
            $data['error'] = 'NO_ERROR';
        }

		$this->load->view('admin_panel/login_view', $data);
	}


    function login_post(){

        // form validation
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin_panel/login_view');
        } else {
            $cek_status = $this->db->query("SELECT * FROM `backenduser` WHERE `username` = '".$_POST['username']."' and `status` = 0");
            if ($cek_status->num_rows()) {
                $this->session->set_flashdata('error', 'Akun anda tidak aktif, silahkan hubungi admin');
                redirect('admin/login');
            }
            $username = $_POST['username'];
            $query = $this->db->query("SELECT * FROM `backenduser` WHERE `username` = '$username' and `status` = 1");
            if ($query->num_rows()) {
                $query_pass = $query->row_array();
    
                if($password = password_verify($_POST['password'],$query_pass['password'])){
                    $query = $this->db->query("SELECT * FROM `backenduser` WHERE `username` = '$username'");
                    if ($query->num_rows()) {
                        $result = $query->row_array();
                        $this->session->set_userdata('username', $result['name']);
                        $this->session->set_userdata('id', $result['uid']);
                        redirect('admin/dashboard');
                    } else {
                    $this->session->set_flashdata('error', 'Kesalahan sistem');
                    redirect('admin/login');
                    } 
                } else {
                    $this->session->set_flashdata('error', 'Password salah');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('error', 'Username tidak ditemukan');
                redirect('admin/login');
            }
                
        }
    }

    function logout(){
        $this->session->unset_userdata('username','id');
        session_destroy();
        redirect('admin/login');
        
    }
}
