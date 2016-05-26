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

      public function get_star(){
         $CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->get_star();
		return $status;
         }

    public function session_designation(){
    	$CI =& get_instance();
    	$CI->load->library('session');
    	return  $CI->session->userdata('designation');
    }
    public function session_data($key){
    	$CI =& get_instance();
    	$CI->load->library('session');
    	return  $CI->session->userdata($key);
    }

	public function insert($tablename, $data){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->record_insert($tablename, $data);
		return $status;
	}
	public function get_recent_audit_where($key, $val, $limit){
         $CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_recent_audit_where($key, $val, $limit);
		return $data;
         }

	public function insert_v2($tablename, $data){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->record_insert_v2($tablename, $data);
		return $status;
	}

	public function get($tablename, $key, $val){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->record_get($tablename, $key, $val);
		return $data;
	}

		public function get_row_count($tablename){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_row_count($tablename);
		return $data;
	}

	public function get_row_count_by_parameter($tablename,$key, $val){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_row_count_by_parameter($tablename,$key, $val);
		return $data;
	}

	public function get_row_count_by_equality($tablename, $col1, $col2){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_count_by_equality($tablename,$col1, $col2);
		return $data;
	}

	public function update($tablename, $key, $val, $data){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->record_update($tablename,$key,$val, $data);
		return $status;
	}


	 public function field_increment($tablename,$id, $field){
        $CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->field_increment($tablename,$id, $field);
		return $status;
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

	public function get_row_by_parameter($tablename,$key, $val)
	{
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->record_by_parameter($tablename, $key, $val);
		return $data;
	}

	public function get_row_by_multiple_parameter($tablename,$key1, $val1, $key2, $val2)
	{
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->record_by_two_parameter($tablename, $key1, $val1, $key2, $val2);
		return $data;
	}

	public function delete_row($tablename, $id){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_columns($tablename, $id);
	}

	public function delete_rows_by_parameter($tablename, $column, $id)
	{
		$CI =& get_instance();
		$CI ->load->model('Crud_model');
		return $CI->Crud_model->delete_by_parameter($tablename, $column, $id);
	}

	public function delete_rows_by_two_parameter($tablename, $key1, $val1, $key2, $val2)
	{
		$CI =& get_instance();
		$CI ->load->model('Crud_model');
		return $CI->Crud_model->delete_by_two_parameter($tablename, $key1, $val1, $key2, $val2);
	}

	public function get_last_id(){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_last_id();
		return $data;
	}

	public function get_sum_by_parameter($tablename,$key, $val, $col){
    	$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_sum_by_parameter($tablename,$key, $val, $col);
		return $data;   
    }

    public function get_sum_by_two_parameter($tablename, $tablename2, $join, $key, $val,$key2, $val2, $col){
    	$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_sum_by_two_parameter($tablename, $tablename2, $join, $key, $val,$key2, $val2, $col);
		return $data;   
    }

    function get_row_by_double_where($tablename, $key1, $val1, $key2, $val2){
    	$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_row_by_double_where($tablename, $key1, $val1, $key2, $val2);
		return $data; 	
    }

    function get_count_by_double_where($tablename, $key1, $val1, $key2, $val2){
    	$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_count_by_double_where($tablename, $key1, $val1, $key2, $val2);
		return $data; 	
    }

    public function get_count_by_equality_where($tablename, $col1, $col2, $key, $val){
            $CI =& get_instance();
			$CI->load->model('Crud_model');
			$data = $CI->Crud_model->get_count_by_equality_where($tablename, $col1, $col2, $key, $val);
			return $data; 
         }

	 public function model(){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		return $CI->Crud_model->model();
	 }

	 public function update_by_two_parameters($tablename,$key1, $val1,$key2, $val2, $data){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$status = $CI->Crud_model->record_update_by_two_parameter($tablename,$key1, $val1,$key2, $val2, $data);
		return $status;
	}
// =====================================================================//
// 							JSON API LIBRARY							//
// =====================================================================//

	public function get_columns_json($tablename, $columns){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_columns($tablename, $columns);
		return json_encode($data);
	}

	public function get_row_by_parameter_json($tablename,$key, $val)
	{
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->record_by_parameter($tablename, $key, $val);
		return json_encode($data);
	}

	public function get_table_data_json($tablename){
		$CI =& get_instance();
		$CI->load->model('Crud_model');
		$data = $CI->Crud_model->get_all_records($tablename);
		return json_encode($data);
	}





}