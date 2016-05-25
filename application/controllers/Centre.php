<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* Centre Controller
	*/
	class Centre extends CI_Controller	{
		
	function __construct()
	{
		parent::__construct();
		$this->load->library("Crud");
		$this->load->helper('ams_helper');
		auth_check($this);
	}

	public function index(){
		$this->load->view('base');
		$centres = $this->crud->get_table_data('centres');
		$data = array(
			'centres' => $centres,			
		);
		$this->load->view('facility_centres', $data);
		$this->load->view('footer');
	}

	public function create(){
		auth_restrict($this, 3);
		$url = 'insert';
		$submit = 'Create';
		$data = array(
			'centre' => get_empty_model('centres'),			
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('centre_create',$data);
		$this->load->view('footer');		
	}

	public function insert(){
		auth_restrict($this, 3);
		$data = get_post_data('centres', $this);
		$this->crud->insert('centres', $data);
		redirect('/centre');
	}

	public function edit($id){
		auth_restrict($this, 3);
		$centre = $this->crud->get('centres', 'id', $id);
		$data = array(
			'centre' => $centre,
			'url' => "update/".$id,
		);
		$this->load->view('base');
		$this->load->view('centre_create', $data);
		$this->load->view('footer');
	}

	public function view($id){
		$centre = $this->crud->get('centres', 'id', $id);
		$data = array(
			'centre' => $centre,			
		);
		$this->load->view('base');
		$this->load->view('centre_view', $data);
		$this->load->view('footer');
	}

	public function update($id){
		auth_restrict($this, 3);
		$data = get_post_data('centres', $this);
		$status = $this->crud->update('centres', 'id', $id, $data);
		redirect('/centre');
	}
}
?>