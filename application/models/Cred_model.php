<?php

class Cred_model extends CI_Model{
    protected $user_details = array();
    
    public function __construct() {
        $this->table = "users";
        parent::__construct();
    }
    
    public function authenticate($email,$password){
        //select columns from database
        $this->db->select("id,email,username");
        $result = $this->db->get_where($this->table,array('email' => $email, 'password' => sha1($password)));

        if($result->num_rows() == 1):
            $user_details = $result->row();
        else:
            return FALSE;
        endif;
        
        
        $this->session->set_userdata("user_id", $user_details->id);
        return TRUE;
    }
}