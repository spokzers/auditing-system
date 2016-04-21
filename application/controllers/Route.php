<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {

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
	public function index()
	{
		$this->load->view('base');
		$this->load->view('index');
		$this->load->view('footer');
		$this->load->view('dashboard-script');
		$data = array(
			'notification' => 'You have a new audit assigned to you',
			'delay' => 15000
		);
		$this->load->view('notifications', $data);
	}

	public function get_insert_route($tablename){
		$route['advance'] = '/Welcome';
		return $route[$tablename];
	}







}
