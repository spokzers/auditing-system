<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* Centre Controller
	*/
	class FacilityWorker extends CI_Controller	{

	function __construct()
	{
		parent::__construct();
		auth_check($this);
	}

	public function index()
	{	
		auth_restrict($this, 6);
		$workers = $this->crud->get_table_data('workers');
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$trainings_workers = $this->crud->get_table_data('trainings_workers');
		$status = [];
		$data = array(
			'workers' => $workers,
			'facility' => 0,
			'facilities'=> $facilities,
			'trainings' => $trainings_workers,
		);
		$this->load->view('base');
		$this->load->view('facility_workers', $data);
		$this->load->view('footer');
	}

	public function facility_view($id){
		$workers = $this->crud->get_row_by_parameter('workers','id_facility', $id);
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$trainings_workers = $this->crud->get_table_data('trainings_workers');
		$status = [];
		$data = array(
			'workers' => $workers,
			'facility' => 1,
			'f_id' => $id,
			'facilities'=> $facilities,
			'trainings' => $trainings_workers,
		);
		$this->load->view('base');
		$this->load->view('facility_workers', $data);
		$this->load->view('footer');

	}

	public function create($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		// auth_restrict($this, 6);
		$heading = 'Create New Worker';
		$url = 'insert';
		$submit = 'Create';
		$worker = get_empty_model('workers');
		$worker[0]->id_facility = $id;
		$data = array(
			'worker' => $worker,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('facility_worker_create', $data);
		$this->load->view('footer');
	}


	public function insert(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('workers', $this);
		$img = $this->crud->insert_v2('workers', $data);
		$facility = $this->crud->get_row_by_parameter('facilities','id', $data['id_facility']);
		$temp = array(
			'workers' => $facility[0]->workers + 1,
		);
		$this->crud->update('facilities','id', $data['id_facility'], $temp);
		$this->do_upload($img);
		redirect("/FacilityWorker/facility_view/".$data['id_facility']);
	}

	public function edit($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Update This Worker';
		$url = "update/$id";
		$worker = $this->crud->get('workers', 'id', $id);
		$submit = 'Update';
		$data = array(
			'worker' => $worker,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		// echo $profile[0]->status;
		$this->load->view('base');
		$this->load->view('facility_worker_create', $data);
		$this->load->view('footer');
		$this->load->view('signature');
	}

	public function update($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('workers', $this);
		$status = $this->crud->update('workers', 'id', $id, $data);
		$this->do_upload($id);
		redirect('/FacilityWorker');
	}


	public function do_upload($new_name){
		$config['upload_path']          = './uploads/worker/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['file_name'] 			 = $new_name;
		$config['overwrite'] 			 = TRUE;
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('dp')){
			$error = array('error' => $this->upload->display_errors());
			
		}
		else{
			$data = array('upload_data' => $this->upload->data());
		}
	 }


	public function view($id){
		$worker = $this->crud->get('workers', 'id', $id);
		$training_row = $this->crud->get_row_by_parameter('trainings_workers','id_worker',$id);
		$training = [];
		for ($i=0; $i < sizeof($training_row) ; $i++) { 
		 	$training[] = $this->crud->get_row_by_parameter('trainings','id',$training_row[$i]->id_training);
		}

		$data = array(
			'worker' => $worker[0],
			'trainings' => $training
		);
		// echo "<pre>";
		// print_r($training);
		// echo "</pre>";
		$this->load->view('base');
		$this->load->view('worker_view', $data);
		$this->load->view('footer');
	}

	public function search(){
		$data = $this->input->post();
	

		$db = $this->load->database('default', TRUE);

		$db->select('*');
		$db->from('workers');

	
	
		if($data['name']){
			$db->where('name', $data['name']);
		}
		if($data['status']){
			$db->where('status', $data['status']);
		}
		if($data['license']){
			$db->where('license', $data['license']);
		}
		if($data['iqama']){
			// echo $data['iqama'];
			$db->where('id_no', $data['iqama']);
		}

	
		$result = $db->get()->result();

		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$trainings_workers = $this->crud->get_table_data('trainings_workers');
		$status = [];
		$data = array(
			'workers' => $result,
			'facility' => 0,
			'facilities'=> $facilities,
			'trainings' => $trainings_workers,
		);
		// var_dump($data);
		// var_dump($result);
		$this->load->view('base');
		$this->load->view('facility_workers', $data);
		$this->load->view('footer');

	}


}
?>
