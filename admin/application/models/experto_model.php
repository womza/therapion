<?php
class Experto_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();        
    } 
    public function get_expertos()
    {
        $result=$this->db->get('expertos');
        if($result->num_rows()>0)
        {
            return $result->result();
        }
        return array();
        
    }
    public function get_experto($id)
    {
        return $this->db->get_where('expertos',array('id'=>$id))->row();
    }
    
}
