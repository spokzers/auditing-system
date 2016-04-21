<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }

    function get_post_data($tablename, $controller){
      $CI =& get_instance();
      $CI->load->model('Crud_model');
      $fields = $CI->Crud_model->get_fields($tablename);
      foreach ($fields as $field) {
        $data[$field] = $controller->input->post($field);
      }
      return $data;
    }

    function get_designation(){
      $designation[1] = 'Administrator';
      $designation[2] = 'Inspector';
      $designation[3] = 'Supervisor';
      $designation[4] = 'Manager';
      $designation[5] = 'Director';
      $designation[6] = 'Data Entry Workers';

      return $designation;
    }
}
