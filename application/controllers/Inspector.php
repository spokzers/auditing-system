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
		 auth_check($this);
		
 }

	public function index()
	{	
		auth_restrict($this, 6);
		$this->load->view('base');
		 if($this->crud->session_designation() == 2){
                
               $profiles = $this->crud->get_row_by_parameter('userprofiles', 'id', $this->session->userdata('id'));
                
           }else{
			$profiles = $this->crud->get_table_data('userprofiles');
           	
           }
		$data = array(
			'profiles' => $profiles,
			'designation' => get_designation(),
		);
		$this->load->view('inspector', $data);
		$this->load->view('footer');
	}

	public function create(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Create New Inspector';
		$url = 'insert';
		$submit = 'Create';
		$reports = $this->crud->get_columns('userprofiles', 'id, name');
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$data = array(
			'profile' => get_empty_model('userprofiles'),
			'facilities' => $facilities,
			'reports' => $reports,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		$this->load->view('base');
		$this->load->view('inspector_create', $data);
		$this->load->view('footer');
		$this->load->view('signature');
		// $this->load->view('inspector_create_js');
	}

	public function insert(){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('userprofiles', $this);
		$data['password'] = sha1($data['password']);
		if($data['designation'] != 6){
			$data['id_facility'] = -1;
		}
		$id = $this->crud->insert_v2('userprofiles', $data);
		$id = $id . '.jpg';
		$this->do_upload($id);
	}

	public function edit($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$heading = 'Update This Inspector';
		$url = "update/$id";
		$profile = $this->crud->get('userprofiles', 'id', $id);
		$submit = 'Update';
		$reports = $this->crud->get_columns('userprofiles', 'id, name');
		$facilities = $this->crud->get_columns('facilities', 'id, name');
		$data = array(
			'profile' => $profile,
			'reports' => $reports,
			'facilities' => $facilities,
			'heading' => $heading,
			'url' => $url,
			'submit' => $submit
		);
		
		$this->load->view('base');
		$this->load->view('inspector_create', $data);
		$this->load->view('footer');
		$this->load->view('signature');
	}

	public function update($id){
		auth_restrict($this, 6);
		auth_restrict($this, 5);
		auth_restrict($this, 3);
		$data = get_post_data('userprofiles', $this);
		if($data['designation'] != 6){
			$data['id_facility'] = -1;
		}
		$status = $this->crud->update('userprofiles', 'id', $id, $data);
		$id = $id . '.jpg';
		$this->do_upload($id);
	}


	public function do_upload($new_name)
			 {
							 $config['upload_path']          = './uploads/profile/';
							 $config['allowed_types']        = 'gif|jpg|png|jpeg';
							 $config['file_name'] 			 = $new_name;

							 $this->load->library('upload', $config);

							 if ( ! $this->upload->do_upload('dp'))
							 {
											 $error = array('error' => $this->upload->display_errors());
											 // redirect('/inspector');
											 var_dump($error);
							 }
							 else
							 {
											 $data = array('upload_data' => $this->upload->data());
											 redirect('/inspector');
							 }
			 }


	public function view($id){
		$profile = $this->crud->get('userprofiles', 'id', $id);
		$report = $this->crud->get_row_by_parameter('userprofiles','id',$profile[0]->reports_to);
		if(!$report){
			$report[0] = (object) array('name' => 'Does not report to anyone');
		}
		$data = array(
			'profile' => $profile,
			'report' => $report
		);
		$this->load->view('base');
		$this->load->view('inspector_view', $data);
		$this->load->view('footer');
	}



}
