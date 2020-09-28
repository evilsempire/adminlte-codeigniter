<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mailer {

    function send($data) {
        $ci = get_instance();
        $ci->load->config('email');
        $ci->load->library('email');

        $from = $ci->config->item('smtp_user');
        $to = $data['email'];
        $subject = "Successfully applied for Job Listing";
        $message = $ci->load->view('email_templates/success', $data, true);
        


        $ci->email->set_newline("\r\n");
        $ci->email->from($from);
        $ci->email->to($to);
        $ci->email->subject($subject);
        $ci->email->message($message);

        if ($ci->email->send()) {
            return true;
//            echo 'Your Email has successfully been sent.';
        } else {
            return false;
//            show_error($this->email->print_debugger());
        }
    }

}
