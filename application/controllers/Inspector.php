<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspector extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
 {
		 parent::__construct();
		 $this->load->database();
		 $this->load->library("Crud");
 }

	public function index()
	{
		$this->load->view('base');
		$this->load->view('inspector_view');
		$this->load->view('footer');
	}

	public function create(){
		$this->load->view('base');
		$this->load->view('inspector_create');
		$this->load->view('footer');
		$this->load->view('signature');
	}









}
