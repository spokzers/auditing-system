<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penalty extends CI_Controller {

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
		 auth_check($this);
 	}

	public function index()
	{	
		auth_restrict($this, 6);
		$this->load->view('base');
		$penalties = $this->crud->get_row_by_parameter('penalties', 'approval', 0);
		$category = $this->crud->get_columns('categories', 'id, category');
		$data = array(
			'penalties' => $penalties,
			'categories' => $category,
		);
		$this->load->view('penalty_view', $data);
		$this->load->view('footer');
	}

	public function create(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Create New Penalty';
		$url = 'insert';
		$submit = 'Create';
		$categories = $this->crud->get_columns('categories', 'id, category');
		$data = array(
			'penalty' => get_empty_model('penalties'),
			'categories' => $categories,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('penalty_create', $data);
		$this->load->view('footer');
		$this->load->view('add_category');
	}

	public function insert(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('penalties', $this);
		if($this->crud->session_designation() == 2){
                
               $data['approval'] = 1;
                
           }else{
			$data['approval'] = 0;
           	
           }
		
		$this->crud->insert('penalties', $data);
		redirect('/penalty');
	}

	public function edit($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Update This Penalty';
		$url = "update/$id";
		$penalty = $this->crud->get_row_by_double_where('penalties', 'id', $id, 'approval', 0);
		$submit = 'Update';
		$data = array(
			'penalty' => $penalty,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		// echo $profile[0]->status;
		$this->load->view('base');
		$this->load->view('penalty_create', $data);
		$this->load->view('footer');
		$this->load->view('add_category');
	}

	public function update($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('penalties', $this);
		$status = $this->crud->update('penalties', 'id', $id, $data);
		redirect('/penalty');
	}

	public function view($id){
		auth_restrict($this, 6);
		$penalty = $this->crud->get_row_by_double_where('penalties', 'id', $id, 'approval', 0);
		$category = $this->crud->get_columns('categories', 'id, category');
		$data = array(
			'penalty' => $penalty,
			'categories' => $category,
		);
		$this->load->view('base');
		$this->load->view('penalty', $data);
		$this->load->view('footer');
	}

	public function insert_category(){
			auth_restrict($this, 6);
			auth_restrict($this, 5);
			auth_restrict($this, 3);
			$data = get_post_data('categories', $this);
			$this->crud->insert('categories', $data);
	}

	public function get_categories(){
		echo $this->crud->get_columns_json('categories', 'id, category');
	}



}
