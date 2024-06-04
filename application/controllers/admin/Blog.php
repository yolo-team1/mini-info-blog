<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('pagination');

    }

	public function index()
	{   
        if ($_SESSION['username'] == 'Administrator') {
            $query = $this->db->query("SELECT * FROM `blog` ORDER BY blog_id DESC");
            $data['blog_result'] = $query->result_array();
            $this->load->view('admin_panel/view_blog', $data);
        } else {
            $query = $this->db->query("SELECT * FROM `blog` WHERE `penulis` = '".$_SESSION['username']."' ORDER BY blog_id DESC");
            $data['blog_result'] = $query->result_array();
            $this->load->view('admin_panel/view_blog', $data);
        }
        
	}
    function addblog(){

        $this->load->view('admin_panel/add_blog');
    }
    function addblog_post(){

        if ($_FILES) {
            $config['upload_path']          = './././assets/upload/blog_img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['file_name']            = $_POST['judul'];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('error', $error['error']);
                    redirect('admin/blog/addblog');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $fileurl = 'assets/upload/blog_img/'.$data['upload_data']['file_name'];
                    $blog_title = $_POST['judul'];
                    $blog_content = $_POST['isi'];
                    $publish_unpublish = $_POST['publish_unpublish'];
                    $penulis = $_SESSION['username'];
                    $kategori = $_POST['kategori'];
                    $headline = $_POST['headline'];
                    $user = $_POST['username'];
                    $id = $_POST['id'];

                    $query = $this->db->query("INSERT INTO `blog`(`blog_title`,`blog_desc`, `blog_img`, `status`, `penulis`, `uid`, `kategori`, `headline`) VALUES ('$blog_title','$blog_content','$fileurl','$publish_unpublish','$penulis','$id','$kategori','$headline')");
                    
                    if ($query) {
                        $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Menambahkan artikel $blog_title', NOW())");
                        $this->session->set_flashdata('message', 'Data berhasil disimpan');
                        redirect('admin/blog/addblog');
                    } else {
                        $this->session->set_flashdata('error', 'Data gagal disimpan');
                        redirect('admin/blog/addblog');
                    }

            }
        } else {
            $this->session->set_flashdata('error', 'Gambar harus diisi');
            redirect('admin/blog/addblog');
        }
    }
    
    function editblog($blog_id) {
        $query = $this->db->query("SELECT * FROM `blog` WHERE `blog_id` = '$blog_id'");
        if ($_SESSION['username'] != $query->row_array()['penulis'] and $_SESSION['username'] != 'Administrator') {
            $this->session->set_flashdata('errorr', 'Anda tidak memiliki akses karena anda bukan penulis artikel ini');
            redirect('admin/blog');
        }
        $data['blog_result'] = $query->result_array();
        $data['blog_id'] = $blog_id;

        $this->load->view('admin_panel/edit_blog', $data);
    }

    function editblog_post(){
        // print_r($_POST);
        // print_r($_FILES);
       
        if ($_FILES['gambar']['name']) {
            $config['upload_path']          = './././assets/upload/blog_img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('error', $error['error']);
            }
            else
            {       
                    $file = $this->db->query("SELECT `blog_img` FROM `blog` WHERE `blog_id` = '".$_POST['blog_id']."'")->row_array();
                    unlink($file['blog_img']);
                    $data = array('upload_data' => $this->upload->data());
                    $fileurl = 'assets/upload/blog_img/'.$data['upload_data']['file_name'];
                    $blog_title = $_POST['judul'];
                    $blog_content = $_POST['isi'];
                    $blog_id = $_POST['blog_id'];
                    $publish_unpublish = $_POST['publish_unpublish'];
                    $penulis = $_SESSION['username'];
                    $kategori = $_POST['kategori'];
                    $headline = $_POST['headline'];
                    $user = $_SESSION['username'];

                    $query = $this->db->query("UPDATE `blog` SET `blog_title`='$blog_title',`blog_desc`='$blog_content',`blog_img`='$fileurl',`status`='$publish_unpublish',`penulis`='$penulis',`kategori`='$kategori',`headline`='$headline' WHERE `blog_id`='$blog_id'");

                    
                    if ($query) {
                        $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Mengedit artikel $blog_title', NOW())");
                        $this->session->set_flashdata('message', 'Data Berhasil Di Update');
                        redirect('admin/blog');
                    } else {
                        $this->session->set_flashdata('error', 'Data Gagal Di Update');
                        redirect('admin/blog');
                    }
            }
        } else {
            $blog_title = $_POST['judul'];
            $desc = $_POST['isi'];
            $blog_id = $_POST['blog_id'];
            $publish_unpublish = $_POST['publish_unpublish'];
            $penulis = $_SESSION['username'];
            $kategori = $_POST['kategori'];
            $headline = $_POST['headline'];
            $user = $_SESSION['username'];

            $query = $this->db->query("UPDATE `blog` SET `blog_title`='$blog_title',`blog_desc`='$desc',`status`='$publish_unpublish',`penulis`='$penulis',`kategori`='$kategori',`headline`='$headline' WHERE `blog_id`='$blog_id'");

            if ($query) {
                $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Mengedit artikel $blog_title', NOW())");
                $this->session->set_flashdata('message', 'Data Berhasil Di Update');
                redirect('admin/blog');
            } else {
                $this->session->set_flashdata('error', 'Data Gagal Di Update');
                redirect('admin/blog');
            }
		}
        }

    function deleteblog($delete_id){
        // cek apakah user yang login adalah penulis artikel yang akan dihapus atau admin 
        $query = $this->db->query("SELECT * FROM `blog` WHERE `blog_id` = '$delete_id'")->row_array();
        if ($query['penulis'] != $_SESSION['username']  and $_SESSION['username'] != 'Administrator'  ) {
            $this->session->set_flashdata('error', 'Anda tidak bisa menghapus karena anda bukan penulis artikel ini');
            redirect('admin/blog');
        } else {
            $user = $_SESSION['username'];
            // ambil nama artikel yang akan dihapus untuk di log
            $query = $this->db->query("SELECT * FROM `blog` WHERE `blog_id` = '$delete_id'")->row_array();
            $activity = $query['blog_title'];
            // hapus gambar artikel
            $file = $query['blog_img'];
            unlink($file);
            $query_delete = $this->db->query("DELETE FROM `blog` WHERE `blog_id` = '$delete_id'");
            // cek apakah query berhasil dijalankan
            if ($query_delete) {
                // log aktivitas
                $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Menghapus artikel $activity', NOW())");
                $this->session->set_flashdata('message', 'Data berhasil dihapus');
                redirect('admin/blog');
            } else {
                $this->session->set_flashdata('error', 'Data gagal dihapus');
                redirect('admin/blog');
            }
        }

        
    }

    function add_backenduser_post(){
    
        if ($_FILES) {
            $config['upload_path']          = './././assets/profile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['file_name']            = $_POST['username'];
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 100;
            $config['height']       = 100;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('profile_pic'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->session->set_flashdata('error', $error['error']);
                    redirect('admin/dashboard');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $fileurl = 'assets/profile/'.$data['upload_data']['file_name'];
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $status = $_POST['status'];
                    $user = $_SESSION['username'];
                    if ($_SESSION['username'] != 'Administrator') {
                        $this->session->set_flashdata('error', 'Anda tidak memiliki akses');
                        redirect('admin/dashboard');
                    } else {
                        $query = $this->db->query("INSERT INTO `backenduser`(`name`,`username`, `password`, `status`, `profile_pic`) VALUES ('$name','$username','$password','$status','$fileurl')");
                            if ($query) {
                                $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Menambahkan user $username', NOW())");
                                $this->session->set_flashdata('message', 'Data berhasil disimpan');
                                redirect('admin/dashboard');
                            } else {
                                $this->session->set_flashdata('error', 'Data gagal disimpan');
                                redirect('admin/dashboard');
                            }
                    }
            }
        } else {
            $this->session->set_flashdata('error', 'Gambar harus diisi');
            redirect('admin/dashboard');
        }
    }

    function delete_backenduser($id){
        $user = $_SESSION['username'];

        if ($_SESSION['username'] != 'Administrator') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses');
            redirect('admin/dashboard');
        } else {
            $query_fetch = $this->db->query("SELECT * FROM `backenduser` WHERE `uid` = '$id'")->row_array();
            $usertodelete= $query_fetch['username'];
            $file = $query_fetch['profile_pic'];
            unlink($file);
            $query = $this->db->query("DELETE FROM `backenduser` WHERE `uid` = '$id'");
            if ($query) {
                $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Menghapus user $usertodelete', NOW())");
                $this->session->set_flashdata('message', 'User berhasil dihapus');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'User gagal dihapus');
                redirect('admin/dashboard');
            }
        }
    }

    function deactive_backenduser($id){
        $user = $_SESSION['username'];
        if ($_SESSION['username'] != 'Administrator') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses');
            redirect('admin/dashboard');
        } else {
            $usertodeactive = $this->db->query("SELECT `username` FROM `backenduser` WHERE `uid` = '$id'")->row_array()['username'];
            $query = $this->db->query("UPDATE `backenduser` SET `status` = 0 WHERE `uid` = '$id'");
            if ($query) {
                $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Menonaktifkan user $usertodeactive', NOW())");
                $this->session->set_flashdata('message', 'User berhasil dinonaktifkan');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'User gagal dinonaktifkan');
                redirect('admin/dashboard');
            }
        }
    }

    function active_backenduser($id){
        $user = $_SESSION['username'];
        if ($_SESSION['username'] != 'Administrator') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses');
            redirect('admin/dashboard');
        } else {
            $usertoactive = $this->db->query("SELECT `username` FROM `backenduser` WHERE `uid` = '$id'")->row_array()['username'];
            $query = $this->db->query("UPDATE `backenduser` SET `status` = 1 WHERE `uid` = '$id'");
            if ($query) {
                $this->db->query("INSERT INTO `activity_logs`(`user`,`activity`, `created_at`) VALUES ('$user','Mengaktifkan user $usertoactive', NOW())");
                $this->session->set_flashdata('message', 'User berhasil diaktifkan');
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('error', 'User gagal diaktifkan');
                redirect('admin/dashboard');
            }
        }
    }

}