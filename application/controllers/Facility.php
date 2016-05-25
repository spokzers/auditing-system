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
            }
		$audits  = $this->crud->get_columns('audits', 'id_facility', 'rank');
		$rankings = $this->crud->get_table_data('site_rankings');
		$data = array(
			'facilities' => $facility,
			'designation' => get_designation(),
			'rankings' => $rankings,
			'audits' => $audits
		);
		$this->load->view('facility', $data);
		$this->load->view('footer');
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
		$star = $this->crud->get_star();
		$rank = "";
		foreach ($audits as $audit) {
			$rank = $audit->rank;
			// foreach ($inspectors_table as $row) {
			// 	if ($audit->id_inspector == $row->id) {
			// 		$inspectors[] = $row;
			// 	}
			// }
		}
		// print_r($inspectors);
		// $url = 'update';
		// $submit = 'update';
		// $heading = 'Update Facility';
		$data = array(
			'facility' => $facility[0],
			'centres' => $centres,
			'rank' => $rank,
			'audits' => $audits,
			'inspectors' => $inspectors,
			'templates' => $templates,
			'star' => $star
			// 'url' => $url,
			// 'submit' => $submit,
			// 'heading' => $heading
		);
		$this->load->view('base');
		$this->load->view('facility_view', $data);
		$this->load->view('footer');
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
		redirect('/facility');
	}

}
