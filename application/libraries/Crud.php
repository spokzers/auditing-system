<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud{

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

	 public function __construct()
    {
		   $CI =& get_instance();
       $CI->load->helper('url');
			 $CI->load->database();
			 $CI->config->item('base_url');
    }



	public function insert($tablename, $data){
		$this->load->database();
		$this->load->model('Crud_model');
		$status = $this->Crud_model->record_insert($tablename, $data);
		return $status;
	}

	public function update($tablename, $key, $val, $data){
		$this->load->database();
		$this->load->model('Crud_model');
		$status = $this->Crud_model->record_update($tablename,$key,$val, $data);
		return $status;
	}

	public function delete(){

	}

	public function get_post_data($tablename){
		$this->load->model('Crud_model');
		$fields = $this->Crud_model->get_fields($tablename);
		foreach ($fields as $field) {
			$data[$field] = $this->input->post($field);
		}
		return $data;
	}


}
