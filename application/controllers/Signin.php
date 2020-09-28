<?php

/*
 * @desc : this class will be loadd if the user has logged out or session is empty
 * @params: Cred_model 
 * 
 */

class Signin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Cred_model');
        
    }
    
    /*
     * Redirection based on session availability
     */
    
    public function index(){
        if(!empty($this->session->has_userdata('user_id'))){
            redirect('admin/dashboard');
        }
        $this->load->view('signin');
    }
    
    /*
     * @desc: will check the user credentials from signin page
     * @params: None
     * @input : email and password
     * @output : if cred are right then redirect to dashboard module
     */
    
    public function submit(){
        
        
        if($this->input->server("REQUEST_METHOD") == "POST"):
            //print_r($this->input->post());
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            //call the function "authenticate" from cred model
            /*
             * @params : $email,$password
             * @output : true or false
             */
            if($this->Cred_model->authenticate($email,$password)):
                
                redirect("admin/dashboard");
            endif;
        endif;
        
        //if any error then use session and set userdata
        $session_data['error_msg'] = "Invalid Email or password";
        $this->session->set_userdata($session_data);
        redirect('signin');
    }
    
    /*
     * @desc : will unset the session and logs out user to the signin page
     * @params : session variables
     * 
     */
    
    public function logout() {
       
        if (isset($_SESSION['user_id'])) {
            
            // remove session datas
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }

            redirect('signin');
        } else {

            // there user was not logged in, we cannot logged him out,
            // redirect him to site root
            redirect('/');
        }
    }

}