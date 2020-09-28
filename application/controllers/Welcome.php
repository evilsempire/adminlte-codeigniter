<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->config('email');
        $this->load->library('email');

        $from = $this->config->item('smtp_user');
        $to = "ashu102545@gmail.com";
        $subject = "test";
        $message = "
                    <html>
                      <head>
                        <title>your title</title>
                      </head>
                      <body>
                        <p>Hello Sir,</p>
                        <p>Your message</p>
                      </body>
                    </html>";


        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }

    public function test() {
        for ($i = 0; $i <= 25; $i++) {
            echo strtotime(date('Y-m-' . $i, time()));
            echo "<br>";
        }
    }

}
