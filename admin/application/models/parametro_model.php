<?php
class Parametro_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();        
    } 
    public function get_parametros()
    {
        $result=$this->db->get('entidades');
        if($result->num_rows()>0)
        {
            return $result->result();
        }
        return array();
        
    }
    public function get_entidad($id)
    {
        return $this->db->get_where('entidades',array('id'=>$id))->row();
    }
    
}
