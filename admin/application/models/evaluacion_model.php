<?php
class Evaluacion_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();        
    } 
    public function get_evaluaciones_de_proyecto($id_proyecto)
    {
        $result=$this->db->get_where('evaluaciones',array('id_proyecto'=>$id_proyecto));
        if($result->num_rows()>0)
        {
            return $result->result();
        }
        return array();
        
    }
    public function get_evaluacion($id)
    {
        return $this->db->get_where('evaluaciones',array('id'=>$id))->row();
    }
    public function actualizar_evaluacion($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('evaluaciones',$data);        
    }
    
}
