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
		$workers = $this->crud->get_table_data('workers');
		$data = array(
			'workers' => $workers,
			'facility' => 0
		);
		$this->load->view('base');
		$this->load->view('facility_workers', $data);
		$this->load->view('footer');
	}

	public function facility_view($id){
		$workers = $this->crud->get_row_by_parameter('workers','id_facility', $id);
		$data = array(
			'workers' => $workers,
			'facility' => 1,
			'f_id' => $id
		);
		$this->load->view('base');
		$this->load->view('facility_workers', $data);
		$this->load->view('footer');
	}

	public function create($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
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
		$this->crud->insert('workers', $data);
		$facility = $this->crud->get_row_by_parameter('facilities','id', $data['id_facility']);
		$temp = array(
			'workers' => $facility[0]->workers + 1,
		);
		$this->crud->update('facilities','id', $data['id_facility'], $temp);
		$this->do_upload();
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
		$this->do_upload();
		redirect('/FacilityWorker');
	}


	public function do_upload(){
		$config['upload_path']          = './uploads/worker/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

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


}
?>
