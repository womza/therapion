<?php
class User extends MY_Controller { 

    public function __construct()
    {                 
        parent::__construct();       
        $this->load->helper('url'); 
        $this->load->model('user_model');                
        $this->load->library('mailer');
        $this->initialize_crud();         
    }

    public function index()
    {      
        $this->load->view('login_show'); 
    }
    public function login()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $user=$this->user_model->check_user($username,$password);
        if($user)
        {
            $this->session->set_userdata(array('user'=>$username));
            redirect(base_url().'index.php/admin');                       
        }
        else
        {
            $error='<div style="color:red">El nombre de usuario o la contraseña no son válidos</div>' ;
            $this->load->view('login_show',array('error'=>$error));
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect(base_url().'index.php/user');   
    }
    
   
}