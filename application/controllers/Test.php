<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function sendmail(){
		$this->load->library('email');

		$this->email->from('test1@epic-e360.co.uk', 'Test 1');
		$this->email->to('spokzers@gmail.com'); 
		// $this->email->cc('another@another-example.com'); 
		// $this->email->bcc('them@their-example.com'); 

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$this->email->send();

		echo $this->email->print_debugger();
	}
}
