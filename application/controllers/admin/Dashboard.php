<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{	if ($_SESSION['username'] == 'Administrator') {
		$query = $this->db->query("SELECT * FROM `blog`");
		$data['jumlah_artikel'] = $query->num_rows();
		$data['user'] = $this->db->query("SELECT * FROM `backenduser` WHERE `uid` != 1")->result_array();
		$data['logs'] = $this->db->query("SELECT * FROM `activity_logs` ORDER BY `created_at` DESC LIMIT 10")->result_array();
		$data['jumlah_terpublish'] = $this->db->query("SELECT * FROM `blog` WHERE `status` = 1")->num_rows();
		$data['jumlah_unpublish'] = $this->db->query("SELECT * FROM `blog` WHERE `status` = 0")->num_rows();
		$this->load->view('admin_panel/dashboard_view', $data);
		} else {
			$query = $this->db->query("SELECT * FROM `blog` WHERE `penulis` = '".$_SESSION['username']."'");
			$data['jumlah_artikel'] = $query->num_rows();
			$data['user'] = $this->db->query("SELECT * FROM `backenduser` WHERE `name` = '".$_SESSION['username']."'")->result_array();
			$data['logs'] = $this->db->query("SELECT * FROM activity_logs WHERE user IN ('".$_SESSION['username']."', 'Administrator') ORDER BY `created_at` DESC LIMIT 10")->result_array();
			$data['jumlah_terpublish'] = $this->db->query("SELECT * FROM `blog` WHERE `status` = 1 AND `penulis` = '".$_SESSION['username']."'")->num_rows();
			$data['jumlah_unpublish'] = $this->db->query("SELECT * FROM `blog` WHERE `status` = 0 AND `penulis` = '".$_SESSION['username']."'")->num_rows();
			$this->load->view('admin_panel/dashboard_view', $data);
		}
	}
}
