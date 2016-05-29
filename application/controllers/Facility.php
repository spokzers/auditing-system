<?php
// // // // // // // // //
//  COMPLETE THIS FILE 	//
// // // // // // // // //

defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

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
		 $this->load->library("Crud");
		 $this->load->helper('ams_helper');
		 auth_check($this);
 }

	public function index()
	{
		$this->load->view('base');
		if($this->crud->session_designation() == 6){
                $facility_id = $this->crud->get_row_by_parameter('userprofiles', 'id', $this->session->userdata('id'));
                $facility = $this->crud->get_row_by_parameter('facilities', 'id', $facility_id[0]->id_facility);
            }else{
            	$facility = $this->crud->get_table_data('facilities');
            	$pass_high = $this->crud->get_row_count_by_parameter('audits', 'rank', 1);
            	$pass_satis = $this->crud->get_row_count_by_parameter('audits', 'rank', 2);
            	$pass_imp = $this->crud->get_row_count_by_parameter('audits', 'rank', 3);
            	$pass_fail = $this->crud->get_row_count_by_parameter('audits', 'rank', 4);
            	$pass_not = $this->crud->get_row_count_by_parameter('audits', 'rank', 0);
            }
		$audits  = $this->crud->get_columns('audits', 'id_facility, rank');
		$data = array(
			'facilities' => $facility,
			'designation' => get_designation(),
			'audits' => $audits,
			'pass_high' => $pass_high,
			'pass_satis' => $pass_satis,
			'pass_imp' => $pass_imp,
			'pass_fail' => $pass_fail,
			'pass_not' => $pass_not
		);
		$this->load->view('facility', $data);
		$this->load->view('footer');
		$this->load->view('facility_js');
	}

	public function create(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 6);
		$url = 'insert';
		$submit = 'create';
		$heading = 'Create Facility';
		$centres = $this->crud->get_columns('centres', 'id, name');
		$data = array(
			'facility' => get_empty_model('facilities'),
			'centres' => $centres,
			'url' => $url,
			'submit' => $submit,
			'heading' => $heading
			);
		$this->load->view('base');
		$this->load->view('facility_create', $data);
		$this->load->view('footer');
	}

	public function insert(){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		auth_restrict($this, 6);
		$data = get_post_data('facilities', $this);
		$this->crud->insert('facilities', $data);
		redirect('/facility');
	}

	public function edit($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$facility = $this->crud->get('facilities', 'id', $id);
		$centres = $this->crud->get_columns('centres', 'id, name');
		$url = 'update';
		$submit = 'update';
		$heading = 'Update Facility';
		$data = array(
			'facility' => $facility,
			'centres' => $centres,
			'url' => $url,
			'submit' => $submit,
			'heading' => $heading
		);
		$this->load->view('base');
		$this->load->view('facility_create', $data);
		$this->load->view('footer');
	}

	public function view($id){
		$facility = $this->crud->get('facilities', 'id', $id);
		$centres = $this->crud->get_columns('centres', 'id, name');
		$audits = $this->crud->get_row_by_parameter('audits','id_facility',$id);
		$inspectors = $this->crud->get_columns('userprofiles','id, name');
		$templates = $this->crud->get_table_data('checklists');
		$star = $this->crud->get_star($id);
		$rank = $this->crud->get_recent_audit_where('id_facility', $id, 1);
		$worker_waiting  = $this->crud->get_count_by_double_where('workers', 'id_facility', $facility[0]->id, 'status', 3);
		$worker_trained  = $this->crud->get_count_by_double_where('workers', 'id_facility', $facility[0]->id, 'status', 1);
		if(!$rank){
			$rank[0] = (object) array("rank" => "N/A");
		}
		$data = array(
			'facility' => $facility[0],
			'centres' => $centres,
			'rank' => $rank,
			'audits' => $audits,
			'inspectors' => $inspectors,
			'templates' => $templates,
			'star' => $star,
			'worker_waiting' => $worker_waiting,
			'worker_trained' => $worker_trained
			
		);
		$this->load->view('base');
		$this->load->view('facility_view', $data);
		$this->load->view('footer');
		$this->load->view('audit_view_js');
	}

	public function update($id){
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('facilities',$this);
		$status = $this->crud->update('facilities', 'id', $id, $data);
		redirect('/facility');
	}

	public function delete($id){
		auth_restrict($this, 5);
		auth_restrict($this, 4);
		auth_restrict($this, 3);
		auth_restrict($this, 6);
		$this->crud->delete_rows_by_parameter('facilities','id', $id);
		$this->crud->delete_rows_by_parameter('workers','id_facility', $id);
		$this->crud->delete_rows_by_parameter('audits','id_facility', $id);
		redirect('/facility');
	}

}
