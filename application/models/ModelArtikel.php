<?php 
class ModelArtikel extends CI_Model {
    function get_artikel(){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status', 1);
        $this->db->order_by('created_on', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_artikel_all(){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status', 1);
        $this->db->order_by('created_on', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_artikel_detail($blog_id){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->join('backenduser', 'blog.uid = backenduser.uid');
        $this->db->where('blog_id', $blog_id);
        $query = $this->db->get();

        // Update views
        $this->db->set('views', 'views+1', FALSE);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('blog');
        return $query->row_array();
    }

    function get_artikel_carousel(){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status', 1);
        $this->db->where('headline', 1);
        $this->db->limit(5);
        $this->db->order_by('created_on', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_artikel_kategori($kategori){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status', 1);
        $this->db->where('kategori', $kategori);
        $this->db->order_by('created_on', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function search ($keyword){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->like('blog_title', $keyword);
        $this->db->or_like('blog_desc', $keyword);
        $this->db->where('status', 1);
        $this->db->order_by('created_on', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
}