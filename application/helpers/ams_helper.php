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
        if($controller->input->post($field)){
          $data[$field] = $controller->input->post($field);
        }
        else{
          $data[$field] = '';
        }
      }
      return $data;
    }

    function print_select($name, $case, $options){
      echo "<select name='$name'>";
      if($options[$case]){
        echo "<option value='$case'>$options[$case]</option>";
      }else{
        echo "<option value=''>Select an option</option>";
      }
      foreach ($options as $key => $value) {
        if($key != $case){
          echo "<option value='$key'>$value</option>";
        }
      }
      echo "</select>";
    }

    function get_empty_model($tablename){
      $CI =& get_instance();
      $CI->load->model('Crud_model');
      $fields = $CI->Crud_model->get_fields($tablename);
      foreach ($fields as $field) {
        $data[$field] = '';
      }
      $output[0] = (object)$data;
      return $output;
    }


//------------------------------------------//
//      Project Specific Functions          //
//------------------------------------------//
    function get_designation(){
      $designation[1] = 'Administrator';
      $designation[2] = 'Inspector';
      $designation[3] = 'Supervisor';
      $designation[4] = 'Manager';
      $designation[5] = 'Director';
      $designation[6] = 'Data Entry Workers';

      return $designation;
    }

    function get_section(){
      $section[1] = "Housing Inspection";
      $section[2] = "Environmental & Health Inspections";
      $section[3] = "Market Control Inspection";

      return $section;
    }
}
