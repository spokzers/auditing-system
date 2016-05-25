<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training extends CI_Controller {

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


	public function index(){
		if($this->crud->session_designation() == 2){
			$trainings = $this->crud->get_row_by_parameter('trainings', 'id_trainer', $this->session->userdata('id'));
		}else{
			$trainings = $this->crud->get_table_data('trainings');	
		}

		
		$data = array(
			'trainings' => $trainings,
		);
		$this->load->view('base');
		$this->load->view('training_view', $data);
		$this->load->view('footer');
		$this->load->view('training_details');
	}

	public function create(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Create New Training';
		$url = 'insert';
		$submit = 'Create';
		$trainers = $this->crud->get_row_by_parameter('userprofiles', 'designation', 2);
		$data = array(
			'training' => get_empty_model('trainings'),
			'heading' => $heading,
			'trainers' => $trainers,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('trainings_schedule', $data);
		$this->load->view('footer');
	}

	public function insert(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('trainings', $this);

		foreach ($data as $key => $value) {
			if($value == "on"){
				$data[$key] = 1;
			}
		}
		$status = $this->crud->insert('trainings', $data);
		$last_id = $this->db->insert_id();
		$this->view($last_id);
	}

	public function view($id){
		$last_row = $this->crud->get('trainings', 'id', $id);
		$last_row = json_decode(json_encode($last_row),TRUE);
		$last_row = array_reduce($last_row, 'array_merge', array());
		// ^ donot touch this ^ !

		$weekdays = array();
		$start_date = $last_row['date'];
		$current_date = $start_date;

		$count = 0;
		for ($i=0; $i < $last_row['weeks'] ; $i++) {

			if ($last_row['monday'] == 1) {
				array_push($weekdays, $current_date);
				$current_date = date_increment($current_date);
			}
			elseif ($last_row['monday'] == 0) {
				$current_date = date_increment($current_date);
			}
			if ($last_row['tuesday'] == 1) {
				array_push($weekdays, $current_date);
				$current_date = date_increment($current_date);
			}
			elseif ($last_row['tuesday'] == 0) {
				$current_date = date_increment($current_date);
			}
			if ($last_row['wednesday'] == 1) {
				array_push($weekdays, $current_date);
				$current_date = date_increment($current_date);
			}
			elseif ($last_row['wednesday'] == 0) {
				$current_date = date_increment($current_date);
			}
			if ($last_row['thrusday'] == 1) {
				array_push($weekdays, $current_date);
				$current_date = date_increment($current_date);
			}
			elseif ($last_row['thrusday'] == 0) {
				$current_date = date_increment($current_date);
			}
			if ($last_row['sunday'] == 1) {
				array_push($weekdays, $current_date);
				$current_date = date_increment($current_date);
			}
			elseif ($last_row['sunday'] == 0) {
				$current_date = date_increment($current_date);
			}
			$current_date = date('Y-m-d',strtotime('next monday', strtotime($current_date)));
		}

		if ($last_row['monday'] == 1) {
			$count += 1;
		}
		if ($last_row['tuesday'] == 1) {
			$count += 1;
		}
		if ($last_row['wednesday'] == 1) {
			$count += 1;
		}
		if ($last_row['thrusday'] == 1) {
			$count += 1;
		}
		if ($last_row['sunday'] == 1) {
			$count += 1;
		}


		$trainers = $this->crud->get_row_by_parameter('userprofiles', 'designation', 2);

		$data = array(
			'start_date' => $start_date,
			'count' => $count,
			'trainers' => $trainers,
			'weeks' => $last_row['weeks'],
			'course_id' => $last_row['course_id'],
			'workers' => $last_row['workers'],
			'id_trainer' => $last_row['id_trainer'],
			'weekdays' => $weekdays
			);

		$this->load->view('base');
		$this->load->view('trainings_schedule_2',$data);
		$this->load->view('footer');
	}

	/*
	public function test(){
		$d=mktime(00, 00, 00, 05, 18 , 2016);
		$dateValue='2016-07-15';
		echo "Created date is " . date("Y-m-d", strtotime($dateValue));
		echo "<br>Created date is a ". date("l",strtotime($dateValue));
		echo "<br>".date('Y-m-d l',strtotime("+39 day", strtotime('2016-05-04')));
		echo "<br>".date('Y-m-d l',strtotime('next monday', strtotime('2016-05-18')));
	}
	*/

	public function get_workers($id){
		$trainings_workers_data = $this->crud->get('trainings_workers','id_training',$id);
	    $trainings_workers_data = json_decode(json_encode($trainings_workers_data), TRUE);

	    $worker_ids = [];
		foreach ($trainings_workers_data as $result) {
			$worker_ids[] = $result['id_worker'];
		}
		$workers = [];
		foreach ($worker_ids as $id_worker) {
			$workers[] = $this->crud->get('workers','id',$id_worker);
		}
		// temporary solution
		// donot modify
		$result = array_reduce(json_decode(json_encode($workers), TRUE), 'array_merge', array());

		echo json_encode($result);
	}

	public function delete($id){
		auth_restrict($this, 5);
		auth_restrict($this, 4);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$this->crud->delete_rows_by_parameter('trainings','id',$id);
		$result = $this->crud->delete_rows_by_parameter('trainings_workers', 'id_training',$id);
		// echo $result;
		redirect('/training');
	}

	public function update($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$data = get_post_data('trainings', $this);
		$status = $this->crud->update('trainings', 'id', $id, $data);
	}

	public function schedule(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$data = array_reduce(json_decode(json_encode($_POST), TRUE), 'array_merge', array());
		// print_r($data);
		foreach ($data as $row) {
			// print_r($row);
			// echo $this->crud->insert('classes',$row);
		}

		redirect('/training');
	}

	public function add_worker(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 2);
		$worker = $this->crud->get('workers','id_no',$_POST['id_no']);
		$worker = array_reduce(json_decode(json_encode($worker), TRUE), 'array_merge', array());
		print_r($worker);


		$data = array(
			'id_worker' => $worker['id'],
			'id_training' => $_POST['training_id']
			);

		$this->crud->insert('trainings_workers', $data);

		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}


	public function get_facility($id)
	{
		$facility = $this->crud->get('facilities','id',$id);
		echo json_encode($facility);
	}

}
