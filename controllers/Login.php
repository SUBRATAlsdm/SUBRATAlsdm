<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
        $this->load->view('login_page');
	}
	public function signup(){
		echo "tst 1000";
	}
	
}
