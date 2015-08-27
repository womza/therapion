<?php
class Proyecto_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();        
    } 
    public function insertar_proyecto($data)
    {
        $this->db->insert('proyectos',$data);        
    }
    public function get_proyecto($id)
    {
        return $this->db->get_where('proyectos',array('id'=>$id))->row();
    }
    public function set_identificador($id,$identificador)
    {
        $this->db->where('id',$id);
        $this->db->update('proyectos',array('identificador'=>$identificador));        
    }
    public function get_convocatoria_de_proyecto($id_convocatoria)
    {
        return $this->db->get_where('convocatorias',array('id'=>$id_convocatoria))->row();
    }
    public function actualizar_proyecto($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('proyectos',$data);        
    }
    
}
