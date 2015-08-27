<?php
class Citas_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();        
    } 
    public function get_citas($columna)
    {
        $lang=$this->session->userdata('lang');
        $this->db->join('equipo', 'equipo.id = psicologo.id_equipo');
        $this->db->join('idioma', 'idioma.id = equipo.id_idioma');
        $this->db->where('idioma.siglas',$lang);
        $this->db->where('columna',$columna);
        $this->db->select('psicologo.id as id_psicologo, nombres_apellidos,foto,psicologo.titulo,temas_consulta,therapy_programs, about,');        
        $result=$this->db->get('psicologo');
        return $result->result();        
    }
    public function get_team()
    {
        $lang=$this->session->userdata('lang');        
        $this->db->join('idioma', 'idioma.id = equipo.id_idioma');
        $this->db->where('idioma.siglas',$lang);        
        $result=$this->db->get('equipo');
        return $result->row();
        
    }
    public function get_psicologo($id)
    {
        return $this->db->get_where('psicologo',array('id'=>$id))->row();
    }
    public function set_last_id($id,$last_id)
    {
        $this->db->where('id',$id);
        $this->db->update('convocatorias',array('last_id'=>$last_id));        
    }
    public function get_consulting_methods($id_psicologo)
    {
        $this->db->where('id_psicologo',$id_psicologo);
        $this->db->from('psicologo_metodo_consulta');
        $this->db->join('metodo_consulta', 'psicologo_metodo_consulta.id_metodo_consulta = metodo_consulta.id');
        $this->db->order_by('metodo_consulta.orden');
        $this->db->select('metodo_consulta.titulo');
        return $this->db->get()->result();
    }
    
}
