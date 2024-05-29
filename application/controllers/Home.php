<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->get_artikel();
		$this->load->view('blog_homepage', $data);
	}
    
    public function blog_detail($blog_id=0)
    {
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->get_artikel_detail($blog_id);
        $this->load->view('blog_detail', $data);
    }
    
}
