<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard extends CI_Controller {

    public $user_id;

    public function __construct() {
        parent::__construct();
        //load the check auth function from library file common
        $this->common->check_auth();
        $this->user_id = $this->session->userdata('user_id');
    }

    /*
     * Redirection based on session availability
     */

    public function index() {


        $data = array(
            'title' => 'dashboard',
            'script' => 'dashboard'
        );

        $this->template->render('dashboard/index', $data);
    }

}
