<?php
class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();        
    } 
    public function check_user($username,$password)
    {
        $result= $this->db->get_where('user',array('username' => $username,'password'=>md5($password)));
        return $result->num_rows()>0;
        
    } 
  
    
}
