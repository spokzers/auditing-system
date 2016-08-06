<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Checklist extends CI_Controller {

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
		 auth_check($this);
 }

	public function index()
	{
		$checklists = $this->crud->get_table_data('checklists');
		
		$data = array(
			'checklists' => $checklists,
			
		);
		$this->load->view('base');
		$this->load->view('checklist', $data);
		$this->load->view('footer');
	}

	public function create(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$heading = 'Schedule New Audit';
		$url = 'insert';
		$submit = 'Schedule';
		$inspectors = $this->crud->get_row_by_parameter('userprofiles', 'designation', 2);
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$penalties = $this->crud->get_columns('penalties', 'id, description');
		$data = array(
			'inspectors' => $inspectors,
			'facilities' => $facilities,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('checklist_create', $data);
		$this->load->view('footer');
		$data = array(
			'penalties' => $penalties,
		);
		$this->load->view('checklist_js',  $data);
	}

	public function insert(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('audits', $this);
		$id = $this->crud->insert_v2('audits', $data);
		$data = get_post_data('audits_inspectors', $this);
		$data["id_audit"] = $id;
		$id = $this->crud->insert_v2('audits_inspectors', $data);
		echo $id;
	}

	public function edit($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Update This Penalty';
		$url = "update/$id";
		$penalties = $this->crud->get('penalties', 'id', $id);
		$submit = 'Update';
		$data = array(
			'penalty' => $penalties,
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
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('penalties', $this);
		$status = $this->crud->update('penalties', 'id', $id, $data);
		redirect('/penalty');
	}

	public function view($id){
		$questions = $this->crud->get_row_by_parameter('questions', 'id_checklist', $id);
		$penalties = $this->crud->get_columns('penalties', 'id, description');
		$data = array(
			'penalties' => $penalties,
			'questions' => $questions,
		);
		$this->load->view('base');
		$this->load->view('checklist_view', $data);
		$this->load->view('footer');
		$this->load->view('checklist_view_js');
	}

	public function insert_category(){
			auth_restrict($this, 5);
			$data = get_post_data('categories', $this);
			$this->crud->insert('categories', $data);
	}

	public function get_categories(){
		echo $this->crud->get_columns_json('categories', 'id, category');
	}

	public function get_data(){
		$data = $this->input->post();
		// var_dump($data);
		$checklist_data = [];
		$checklist_data["title"] = $data["title"];
		$checklist_data["description"] = $data["description"];
		$checklist_data["section"] = $data["section"];
		$id_checklist = $this->crud->insert_v2('checklists', $checklist_data);
		unset($data["title"]);
		unset($data["description"]);
		unset($data["section"]);
		foreach ($data as $d) {
			$d["id_checklist"] = $id_checklist;
			$this->crud->insert_v2('questions', $d);
		}

	}

	public function edit_question($id){
		$question = $this->crud->get_row_by_parameter('questions', 'id', $id);
		$data['question'] = $question[0];
		$this->load->view('base');
		$this->load->view('checklist_edit', $data);
		$this->load->view('footer');
	}

	public function update_question(){
		$data = $this->input->post();
		$id = $data['id'];
		unset($data['id']);
		var_dump($data);
		$this->crud->update('questions', 'id', $id, $data);
		redirect('/checklist');
	}


}
