<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {
    //admin template rener
    function render($view,$view_data = array()){
        $ci = get_instance();
        $user_details = $ci->users->get_user_details($ci->user_id);
        $view_data['content_view'] = "admin/".$view;
        $view_data['user_details'] = $user_details;
        
        
        $ci->load->view('admin/layout/index', $view_data);
    }
   
    //frontend template loader
    function load($view, $view_data = array()){
        $ci = get_instance();
        $view_data['content_view'] = $view;
        
        $ci->load->view('layout/index', $view_data);
    }
}