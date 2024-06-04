<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

	public function index()
	{
        $this->load->view('admin_panel/signup_view');
	}

    public function signup(){
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required', [
            'required' => 'Nama Lengkap harus diisi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]', [
            'required' => 'Username harus diisi',
            'min_length' => 'Username minimal 3 karakter'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]', [
            'required' => 'Password harus diisi',
            'min_length' => 'Password minimal 3 karakter'
        ]);
        $this->form_validation->set_rules('password_confirm', 'Konfirmasi Password', 'required|matches[password]', [
            'required' => 'Konfirmasi Password harus diisi',
            'matches' => 'Konfirmasi Password tidak sesuai dengan Password'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin_panel/signup_view');
        } else {
            $config['file_name'] = $this->input->post('username');
            $config['upload_path'] = './././assets/profile/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['mantain_ratio'] = TRUE;
            $config['width'] = 100;
            $config['height'] = 100;
            $this->upload->initialize($config);
            $name = $this->input->post('name');
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            if ( ! $this->upload->do_upload('profile_pic'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('error', $error['error']);
                    redirect('admin/signup');
            } else {
                    $data = array('upload_data' => $this->upload->data());
                    $fileurl = 'assets/profile/'.$data['upload_data']['file_name'];
                    $data = array(
                        'name' => $name,
                        'username' => $username,
                        'password' => $password,
                        'profile_pic' => $fileurl
                    );
                    $this->db->insert('backenduser', $data);
                    $this->session->set_flashdata('message', 'Akun berhasil dibuat, silahkan hubungi admin untuk aktivasi akun');
                    redirect('admin/login');
            }
        
        }
    }
}
