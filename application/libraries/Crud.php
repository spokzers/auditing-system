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
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->record_insert($tablename, $data);
		return $status;
	}

	public function get($tablename, $key, $val){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->record_get($tablename, $key, $val);
		return $data;
	}

	public function update($tablename, $key, $val, $data){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->record_update($tablename,$key,$val, $data);
		return $status;
	}

	public function delete(){
	}

	public function get_table_data($tablename){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_all_records($tablename);
		return $data;
	}

	public function get_columns($tablename, $columns){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_columns($tablename, $columns);
		return $data;
	}




}
