<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->library('pagination');
    }

	public function index()
	{
		$config = array();
        $config["base_url"] = base_url() . "admin/logs";
        $config["total_rows"] = $this->get_total_logs();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo; Sebelumnya &nbsp;';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = ' &nbsp; Selanjutnya &raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="http://localhost/mini-info-blog/admin/logs">';
        $config['cur_tag_close'] = '</a></li>';
       
        
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["logs"] = $this->log($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view('admin_panel/activity_logs_view', $data);
	}

    function log($limit, $start){
        if ($_SESSION ['username'] == 'Administrator') {
            $query = $this->db->query("SELECT * FROM `activity_logs` ORDER BY `created_at` DESC LIMIT $start, $limit");
            return $query->result_array();
        } else {
            $query = $this->db->query("SELECT * FROM activity_logs WHERE `user` IN ('".$_SESSION['username']."', 'Administrator') ORDER BY `created_at` DESC LIMIT $start, $limit");
            return $query->result_array();
        }
    }

    function get_total_logs(){
        if ($_SESSION ['username'] == 'Administrator') {
            $query = $this->db->query("SELECT * FROM `activity_logs`");
            return $query->num_rows();
        } else {
            $query = $this->db->query("SELECT * FROM `activity_logs` WHERE `user` IN ('".$_SESSION['username']."', 'Administrator')");
            return $query->num_rows();
        }
    }
}
