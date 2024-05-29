<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
        $query = $this->db->query("SELECT * FROM `blog` ORDER BY blog_id DESC");
        $data['blog_result'] = $query->result_array();
		$this->load->view('admin_panel/view_blog', $data);
	}
    function addblog(){
        $this->load->view('admin_panel/add_blog');
    }
    function addblog_post(){

        if ($_FILES) {
            $config['upload_path']          = './././assets/upload/blog_img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    die('error');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $fileurl = 'assets/upload/blog_img/'.$data['upload_data']['file_name'];
                    $blog_title = $_POST['judul'];
                    $blog_content = $_POST['isi'];

                    $query = $this->db->query("INSERT INTO `blog` (`blog_title`, `blog_desc`, `blog_img`) VALUES ('$blog_title', '$blog_content', '$fileurl')");
                    if ($query) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan');
                        redirect('admin/blog/addblog');
                    } else {
                        $this->session->set_flashdata('failed', 'Data gagal disimpan');
                        redirect('admin/blog/addblog');
                    }
                    // $this->load->view('upload_success', $data);

            }
        } else {
            die('No file uploaded');
        }
    }
    
    function editblog($blog_id) {
        $query = $this->db->query("SELECT `blog_title`,`blog_desc`,`blog_img`,`status` FROM `blog` WHERE `blog_id` = '$blog_id'");
        $data['blog_result'] = $query->result_array();
        $data['blog_id'] = $blog_id;

        $this->load->view('admin_panel/edit_blog', $data);
    }

    function editblog_post(){
        print_r($_POST);
        print_r($_FILES);
       
        if ($_FILES['gambar']['name']) {
            $config['upload_path']          = './././assets/upload/blog_img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('gambar'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    die('error');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $fileurl = 'assets/upload/blog_img/'.$data['upload_data']['file_name'];
                    $blog_title = $_POST['judul'];
                    $blog_content = $_POST['isi'];
                    $blog_id = $_POST['blog_id'];
                    $publish_unpublish = $_POST['publish_unpublish'];

                    $query = $this->db->query("UPDATE `blog` SET `blog_title` = '$blog_title', `blog_desc` = '$blog_content', `blog_img` = '$fileurl', `status` = '$publish_unpublish' WHERE `blog_id` = '$blog_id'");
                    if ($query) {
                        $this->session->set_flashdata('updated', 'yes');
                        redirect('admin/blog');
                    } else {
                        $this->session->set_flashdata('updated', 'no');
                        redirect('admin/blog');
                    }
                    // $this->load->view('upload_success', $data);

            }
        } else {
            $blog_title = $_POST['judul'];
            $desc = $_POST['isi'];
            $blog_id = $_POST['blog_id'];
            $publish_unpublish = $_POST['publish_unpublish'];

            $query = $this->db->query("UPDATE `blog` SET `blog_title`='$blog_title',`blog_desc`='$desc', status='$publish_unpublish' WHERE `blog_id`='$blog_id'");

            if ($query) {
            	$this->session->set_flashdata('updated', 'yes');
            	redirect("admin/blog");
            }else{
            	$this->session->set_flashdata('updated', 'no');
            	redirect("admin/blog");
            }
		}
        }

    function deleteblog(){
        $delete_id = $_POST['delete_id'];
        $query = $this->db->query("DELETE FROM `blog` WHERE `blog_id` = '$delete_id'");
        if ($query) {
            echo 1;
        } else {
            echo 0;
        }
    }
}