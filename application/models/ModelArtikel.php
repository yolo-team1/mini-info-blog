<?php 
class ModelArtikel extends CI_Model {
    function get_artikel(){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_artikel_detail($blog_id){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('blog_id', $blog_id);
        $query = $this->db->get();
        return $query->row_array();
    }
}
?>