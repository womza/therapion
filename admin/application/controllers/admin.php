<?php
class Admin extends MY_Controller { 

    public function __construct()
    {                 
        parent::__construct();       
        $this->load->helper('url'); 
        $this->load->library('session');
        
        $this->initialize_crud();
        
    }

    public function index()
    {    
        if(!$this->session->userdata('user'))
        {
            redirect(base_url().'index.php/user');
        }  
        $crud=$this->crud;
        $crud->set_table('equipo');  
        $crud->set_subject('Team');
        $crud->set_theme('flexigrid');
        $this->crud->unset_export();
        $this->crud->unset_print();      
        $crud->set_relation('id_idioma','idioma','titulo');
        $crud->display_as('id_idioma','Language');
        $crud->display_as('titulo','Team');
        $crud->unset_add();
                           
        $output = $this->grocery_crud->render();   
        $output->current='Teams';  
        $output->top_menu=array('','','','active','','','');                    
        $this->load->view('header.php',array('top_menu'=>$output->top_menu,'is_admin'=>true));        
        $this->load->view('admin_show.php',$output);
        $this->load->view('footer.php',array('is_admin'=>true));        
                      
    } 
    public function psicologo()
    {    
        if(!$this->session->userdata('user'))
        {
            redirect(base_url().'index.php/user');
        }  
        $crud=$this->crud;
        $crud->set_table('psicologo');  
        $crud->set_subject('Counselor');
        $crud->set_theme('flexigrid');

        $this->crud->unset_export();
        $this->crud->unset_print();  
        $crud->set_relation('id_equipo','equipo','titulo');
        $crud->display_as('id_equipo','Team');
        $crud->display_as('nombres_apellidos','First & Last Name');
        $crud->display_as('titulo','Title'); 
        $crud->display_as('foto','Photo'); 
        $crud->display_as('informacion_adicional','Additional Information');
        $crud->display_as('educacion','Education'); 
        $crud->display_as('columna','Column'); 
        $crud->display_as('temas_consulta','Counseling Themes'); 
        $crud->set_relation_n_n('consulting_methods','psicologo_metodo_consulta','metodo_consulta','id_psicologo','id_metodo_consulta','titulo'); 
        $crud->set_field_upload('foto','../assets/images/profiles'); 
        $crud->unset_texteditor('about','temas_consulta');
        $crud->columns('nombres_apellidos','title','foto','email','id_equipo','columna','consulting_methods');
        $crud->display_as('consulting_methods','Counseling methods');                   
        $output = $this->grocery_crud->render();   
        $output->current='Psychologists';  
        $output->top_menu=array('','','','active','','','');                    
        $this->load->view('header.php',array('top_menu'=>$output->top_menu,'is_admin'=>true));        
        $this->load->view('admin_show.php',$output);
        $this->load->view('footer.php',array('is_admin'=>true));        
                      
    } 
    
   
   
}