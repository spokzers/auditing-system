<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Audit extends CI_Controller {

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
		if($this->crud->session_designation() == 2){
			$audits = $this->crud->get_row_by_parameter('audits', 'id_inspector', $this->session->userdata('id'));
		}else{
			$audits = $this->crud->get_table_data('audits');
		}
		
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$inspectors = $this->crud->get_columns('userprofiles', 'id, name');
		$templates = $this->crud->get_columns('checklists',  'id, title');

		$data = array(
			'audits' => $audits,
			'inspectors' => $inspectors,
			'templates' => $templates,
			'facilities' => $facilities
		);
		$this->load->view('base');
		$this->load->view('audit_view', $data);
		$this->load->view('footer');
		$this->load->view('audit_view_js', $data);
	}

	public function create(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$heading = 'Schedule New Audit';
		$url = 'insert';
		$submit = 'Schedule';
		$inspectors = $this->crud->get_row_by_parameter('userprofiles', 'designation', 2);
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$checklists = $this->crud->get_columns('checklists', 'id, title');
		$data = array(
			'penalty' => get_empty_model('audits'),
			'inspectors' => $inspectors,
			'facilities' => $facilities,
			'checklists' => $checklists,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('audit_schedule', $data);
		$this->load->view('footer');
		$this->load->view('audit_controller');
	}

	public function setdate($id){
		$data = $this->input->post();
		$this->crud->update('audits', 'id', $id, $data);
		var_dump($data);
	}

	public function auto_create(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$heading = 'Auto Schedule New Audit';
		$url = 'insert';
		$submit = 'Schedule';
		$inspectors = $this->crud->get_row_by_parameter('userprofiles', 'designation', 2);
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$checklists = $this->crud->get_columns('checklists', 'id, title');
		$data = array(
			'penalty' => get_empty_model('audits'),
			'inspectors' => $inspectors,
			'facilities' => $facilities,
			'checklists' => $checklists,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('audit_auto', $data);
		$this->load->view('audit_auto_js', $data);
		$this->load->view('footer');
	}

	public function insert(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$data = get_post_data('audits', $this);
		$id = $this->crud->insert_v2('audits', $data);
		$data = get_post_data('audits_inspectors', $this);
		$data["id_audit"] = $id;
		$id = $this->crud->insert_v2('audits_inspectors', $data);
		echo $id;
	}

	public function edit($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
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
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$data = get_post_data('penalties', $this);
		$status = $this->crud->update('penalties', 'id', $id, $data);
		redirect('/penalty');
	}

	public function view($id){
		auth_restrict($this, 6);
		$penalty = $this->crud->get('penalties', 'id', $id);
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

	public function audit_launch($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$audit = $this->crud->get_row_by_parameter('audits','id', $id);
		$facility = $this->crud->get_row_by_parameter('facilities','id', $audit[0]->id_facility);
		$questions = $this->crud->get_row_by_parameter('questions', 'id_checklist', $audit[0]->id_templates);
		$penalties = $this->crud->get_columns('penalties', 'id, min_amount, max_amount, description');
		$workers = $this->crud->get_row_by_parameter('workers', 'id_facility', $facility[0]->id);
		$data = array(
			'audit' => $audit,
			'penalties' => $penalties,
			'questions' => $questions,
			'facility' => $facility,
			'workers' => $workers,
		);
		$this->load->view('base');
		$this->load->view('audit_template', $data);
		$this->load->view('signature');
		$this->load->view('audit_template_js',  $data);
		$this->load->view('footer');
	}

	public function finish_audit(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = $this->input->post();
		$id = $data['id'];
		unset($data['id']);
		$this->crud->update('audits', 'id', $id, $data);
		return "Ok";
	}

	public function delete($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 4);
		auth_restrict($this, 3);
		$this->crud->delete_rows_by_parameter('audits', 'id', $id);
		$this->crud->delete_rows_by_parameter('violations', 'id_audit', $id);
		// $this->crud->delete_rows_by_parameter('violations_workers', 'id_audit', $id);
		$this->crud->delete_rows_by_parameter('answers', 'id_audit', $id);
		redirect('/audit');
	}

	public function increment_violations(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = $this->input->post();
		
		foreach($data as $key => $value) {
			$question = $this->crud->field_increment('questions', $value, 'violation');
			// $violation = array(
			// 	'violation' => $question[0]->violation + 1,
			// );
			//  $this->crud->update('questions', 'id', $value, $violation);
			// echo $violation['violation'];
			// echo $value;
		}
		
 		echo "Done";

	}

	public function insert_disposal(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = $this->input->post();
		for ($i=0; $i < count($data) ; $i++) { 
			$this->crud->insert_v2('disposal', $data[$i]); 
		}
		// var_dump($this->input->post());
		echo "Success! Viola!";
	}

	public function insert_sample(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = $this->input->post();
		for ($i=0; $i < count($data) ; $i++) { 
			$this->crud->insert_v2('samples', $data[$i]); 
		}
		// var_dump($this->input->post());
		echo "Success! Viola!";
	}

	public function insert_answer(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = $this->input->post();
		for ($i=0; $i < count($data) ; $i++) { 
			$this->crud->insert_v2('answers', $data[$i]); 
		}
		// var_dump($this->input->post());
		echo "Success! Viola!";
	}

	public function insert_violation(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = $this->input->post();
		$data['attachment'] = '1';
		$wids = $data['id_workers'];
		unset($data['id_workers']);
		unset($data['id']);
		$wids = explode(",", $wids);
		$img = $this->crud->insert_v2('violations', $data);
		for ($i=0 ; $i < count($wids)-1 ; $i++ ) { 
			$d = array(
				'id_violation' => $img,
				'id_worker' => $wids[$i]
				);
			$this->crud->insert_v2('violations_workers', $d);
		}
		$img = $img . ".jpg";
		$this->do_upload($img);
	}

		public function do_upload($new_name)
			 {
							 $config['upload_path']          = './uploads/violations/';
							 $config['allowed_types']        = 'gif|jpg|png|jpeg';
							 $config['file_name'] 			 = $new_name;
							 $config['overwrite'] 			 = TRUE;

							 $this->load->library('upload', $config);

							 if ( ! $this->upload->do_upload('attachment'))
							 {
											 $error = array('error' => $this->upload->display_errors());
											 var_dump($error);
							 }
							 else
							 {
											 $data = array('upload_data' => $this->upload->data());
											 // redirect('/inspector');
											 echo "It was a success congrats!";
							 }
			 }
}
