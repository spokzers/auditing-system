<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	function __construct(){
		 parent::__construct();
		 auth_check($this);
 	}

	public function index(){

		$inspectors = $this->crud->get_columns('userprofiles', 'id, name');

		$data = array(
			'inspectors' => $inspectors,
		);

		$this->load->view('base');
		$this->load->view('reports', $data);
		$this->load->view('footer');
		$this->load->view('charts_scripts');
	}

	public function get_disposal_data(){
		$result = $this->crud->get_table_data('disposal');

		echo json_encode($result);

	}

	public function get_violations(){
		$result = $this->crud->get_table_data('violations');
		echo json_encode($result);
	}

	public function get_inspectors(){
		$result = $this->crud->get_columns('userprofiles', 'id, name,  designation');
		echo json_encode($result);
	}

	public function get_penalty(){
		$result = $this->crud->get_columns('audits', 'section,  penalty, doa');
		echo json_encode($result);
	}

}
