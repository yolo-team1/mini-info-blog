<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
        if (isset($_SESSION['user_id'])) {
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
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = $this->db->query("SELECT * FROM `backenduser` WHERE `username` = '$username' AND password = '$password'");
            if ($query->num_rows()) {
                $result = $query->result_array();
                //print_r($result); die();

                $this->session->set_userdata('user_id', $result[0]['uid']);
                redirect('admin/dashboard');
            }
            else {
               $this->session->set_flashdata('error', 'Username atau password salah');
               redirect('admin/login');
            }
        } else {
            die('Kesalahan input data');
        }
    }
    function logout(){
        $this->session->unset_userdata('user_id');
        session_destroy();
        redirect('admin/login');
        
    }
}
