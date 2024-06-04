<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->get_artikel();
        $data['artikel_carousel'] = $this->ModelArtikel->get_artikel_carousel();
		$this->load->view('blog_homepage', $data);
	}
    
    public function blog_detail($blog_id=0)
    {
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->get_artikel_detail($blog_id);
        $this->load->view('blog_detail', $data);
    }

    public function blog_kategori($kategori= null)
    {
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->get_artikel_kategori($kategori);
        $this->load->view('blog_kategori', $data);
    }

    public function blog_get_all() {
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->get_artikel_all();
        $this->load->view('blog_kategori', $data);
    }

    public function search() {
        $keyword = $this->input->post('keyword');
        $this->load->model('ModelArtikel');
        $data['artikel'] = $this->ModelArtikel->search($keyword);
        $this->load->view('blog_kategori', $data);
    }
    
}
