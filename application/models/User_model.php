<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_model extends CI_Model{
    public  $table;
    
    public function __construct() {
     parent::__construct();
     $this->table = "users";
 }
 
    public function get_user_details($user_id){
        $this->db->select("id,email,username");
        $result = $this->db->get_where($this->table,array('id' => $user_id));

        if($result->num_rows() == 1):
            return $user_details = $result->row();
        else:
            return FALSE;
        endif;
    }
}