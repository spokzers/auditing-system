<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct(){
	    parent::__construct();

	}

	public function index(){
		if($this->session->userdata('is_logged_in')){
      	redirect('/dashboard');
     	}
		$this->load->view('page-login');
	}

	public function get_insert_route($tablename){
		$route['advance'] = '/Welcome';
		return $route[$tablename];
	}

	public function temp(){
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

	public function get_in(){
		$password = sha1($this->input->post('password'));
		$username = $this->input->post('username');
		$user = $this->crud->get_row_by_parameter('userprofiles', 'username', $username);
		if(!$user){
			redirect('/');
		}
		if($user[0]->password == $password){
			$data = array(
				'username' => $username,
				'designation' => $user[0]->designation,
				'id' => $user[0]->id,
				'is_logged_in' => true,
				);
			$this->session->set_userdata($data);
			redirect('/dashboard');
		}else{
			redirect('/');
		}
	}

	public function logout(){
		$array_items = array('username', 'designation', 'is_logged_in','id');
		$this->session->unset_userdata($array_items);
		redirect('/');
	}

	}





