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
 }

	public function index()
	{
		$this->load->view('base');
		$profiles = $this->crud->get_table_data('userprofiles');
		$data = array(
			'profiles' => $profiles,
			'designation' => get_designation(),
		);
		$this->load->view('inspector_view', $data);
		$this->load->view('footer');
	}

	public function create(){
		$heading = 'Create New Inspector';
		$url = 'insert';
		$submit = 'Create';
		$reports = $this->crud->get_columns('userprofiles', 'id, name');
		$data = array(
			'profile' => get_empty_model('userprofiles'),
			'reports' => $reports,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('inspector_create', $data);
		$this->load->view('footer');
		$this->load->view('signature');
	}

	public function insert(){
		$data = get_post_data('userprofiles', $this);
		$this->crud->insert('userprofiles', $data);
		redirect('/inspector');
	}

	public function edit($id){
		$heading = 'Update This Inspector';
		$url = "update/$id";
		$profile = $this->crud->get('userprofiles', 'id', $id);
		$submit = 'Update';
		$reports = $this->crud->get_columns('userprofiles', 'id, name');
		$data = array(
			'profile' => $profile,
			'reports' => $reports,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		// echo $profile[0]->status;
		$this->load->view('base');
		$this->load->view('inspector_create', $data);
		$this->load->view('footer');
		$this->load->view('signature');
	}

	public function update($id){
		$data = get_post_data('userprofiles', $this);
		$status = $this->crud->update('userprofiles', 'id', $id, $data);
		redirect('/inspector');
	}










}
