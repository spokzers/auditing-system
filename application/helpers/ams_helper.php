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

    function get_2d_post_data($tablename, $controller){
      $CI =& get_instance();
      $CI->load->model('Crud_model');
      $fields = $CI->Crud_model->get_fields($tablename);
      for ($i=0; $i < 2 ; $i++) {
        foreach ($fields as $field) {
          if($controller->input->post($field)){
            $data[$i][$field] = $controller->input->post($field);
          }
          else{
            $data[$i][$field] = '';
          }
        }
      }
      return $data;
    }

    function print_table($objects){
      foreach ($objects as $object) {
        $object = (array)$object;
        foreach ($object as $key => $value) {
          echo "<td>$value</td>";
        }
      }
    }

    function print_select($name, $case, $options, $id){
      echo "<select name='$name' id='$id'>";
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

    function print_select_v2($name, $case, $options, $params){
      echo "<select name='$name' $params>";
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

    function join_model($obj, $id){
      foreach ($obj as $o) {
        if($o->id == $id){
          return $o;
        }
      }
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

     function print_options($case, $options, $id){
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
    }

    function getNiceDuration($durationInSeconds) {

      $duration = '';
      $days = floor($durationInSeconds / 86400);
      $durationInSeconds -= $days * 86400;
      $hours = floor($durationInSeconds / 3600);
      $durationInSeconds -= $hours * 3600;
      $minutes = floor($durationInSeconds / 60);
      $seconds = $durationInSeconds - $minutes * 60;

      if($days > 0) {
        $duration .= $days . ' days';
      }
      if($hours > 0) {
        $duration .= ' ' . $hours . ' hours';
      }
      if($minutes > 0) {
        $duration .= ' ' . $minutes . ' minutes';
      }
      if($seconds > 0) {
        $duration .= ' ' . $seconds . ' seconds';
      }
      return $duration;
    }

//-------------------------------------------//
    function auth_check($controller){
      if(!$controller->session->userdata('is_logged_in')){
      redirect('/');
     }
    }

    function auth_restrict($controller, $id){
      if($controller->session->userdata('designation') == $id){
      redirect($controller->agent->referrer());
     }
    }





//------------------------------------------//
//      Project Specific Functions          //
//------------------------------------------//
      function date_increment($current_date){
      return date('Y-m-d',strtotime("+1 day", strtotime($current_date)));
    }

    function get_audit_reason($id){
      if($id==0){
        return "Not Selected";
      }
      $reason[1] = "Complain";
      $reason[2] = "Routine";
      $reason[3] = "License Checking";

      return $reason[$id];
    }

    function get_reason(){
      $reason[1] = "Complain";
      $reason[2] = "Routine";
      $reason[3] = "License Checking";

      return $reason;
    }

    function get_audit_answer($id)
    {
      $ans[1] = "Yes";
      $ans[2] = "No";
      $ans[3] = "N/A";

      return $ans[$id];
    }

    function get_worker_status($id){
      if($id==0){
        return "Not Selected";
      }
       $status[1] = "Trained";
       $status[2] = "Untrained";
       $status[3] = "Waiting";
       return $status[$id];
    }

    function get_training_status(){
      $status[1] = "Trained";
      $status[2] = "Untrained";
      $status[3] = "Waiting";
      return $status;
    }


    function get_training_level(){
      $status[1] = "Level 1";
      $status[2] = "Level 2";
      $status[3] = "Level 3";
      return $status;
    }

    function get_language(){
      $status[1] = "English";
      $status[2] = "Urdu";
      $status[3] = "Hindi";
      $status[4] = "Bengali";
      $status[5] = "Arabic";
      $status[6] = "Tagalog";
      $status[7] = "Bahasa";
      $status[8] = "Indonesian";
      $status[9] = "Other";
      return $status;
    }

    function get_worker_level($id){
        $status[1] = "Level 1";
        $status[2] = "Level 2";
        $status[3] = "Level 3";
        return $status[$id];
    }

    function get_designation(){
      $designation[1] = 'Administrator';
      $designation[2] = 'Inspector';
      $designation[3] = 'Supervisor';
      $designation[4] = 'Manager';
      $designation[5] = 'Government Officials';
      $designation[6] = 'Client';

      return $designation;
    }

    function get_designation_text($value){
      switch ($value) {
        case 1:
          return "Administrator";
          break;
        case 2:
          return "Inspector";
          break;
        case 3:
          return "Supervisor";
          break;
        case 4:
          return "Manager";
          break;
        case 5:
          return "Director";
          break;
        case 6:
          return "Data Entry Workers";
          break;
        default:
          return "Not Specified";
          break;
      }
    }

    function get_severity(){
      $section[1] = "Highly Severe";
      $section[2] = "Medium Severity";
      $section[3] = "Low Severity";

      return $section;
    }

    function get_severity_text($id){
      $section[1] = "Highly Severe";
      $section[2] = "Medium Severity";
      $section[3] = "Low Severity";

      return $section[$id];
    }

    function get_section(){
      $section[1] = "Housing Inspection";
      $section[2] = "Environmental & Health Inspections";
      $section[3] = "Market Control Inspection";

      return $section;
    }
    function get_section_text($value)
    {
      switch ($value) {
        case 1:
          return "Housing Inspection";
          break;
        case 2:
          return "Environmental & Health Inspections";
          break;
        case 3:
          return "Market Control Inspection";
          break;
        default:
          return "Not Specified";
          break;
      }
    }

    function site_status($id){
      $val[1] = "Passed";
      $val[2] = "Warning";
      $val[3] = "Warning and office hearing";
      $val[4] = "Office Hearing";
      $val[5] = "Suspension";
      $val[6] = "Suspension and Office Hearing";
      $val[7] = "Closure";
      $val[8] = "Closure and Office Hearing";

      return $val[$id];
    }

     function get_site_status(){
      $val[1] = "Passed";
      $val[2] = "Warning";
      $val[3] = "Warning and office hearing";
      $val[4] = "Office Hearing";
      $val[5] = "Suspension";
      $val[6] = "Suspension and Office Hearing";
      $val[7] = "Closure";
      $val[8] = "Closure and Office Hearing";

      return $val;
    }

    function site_rank($id){
      $rank[1] = 'A';
      $rank[2] = 'B';
      $rank[3] = 'C';
      $rank[4] = 'D';
      $rank[0] = 'N/A';
      return $rank;

    }

    function get_site_rank($id){
      if ($id == 0) {
        return "";
      }
      $rank[1] = 'A';
      $rank[2] = 'B';
      $rank[3] = 'C';
      $rank[4] = 'D';
      return $rank[$id];
    }

    function calculate_rank($marks_obtained, $total_marks){
      $percent = $marks_obtained/$total_marks * 100;
      if($percent > 90){
        return 1;
      }elseif($percent > 80){
        return 2;
      }elseif($percent > 70){
        return 3;
      }else{
        return 4;
      }
    }

    function audit_status($id){
      $status[1] = "Scheduled";
      $status[2] = "Completed";
    }

    function storage_types(){
      $status[1] = "Frozen";
      $status[2] = "Dry";
      $status[3] = "Chilled";
      $status[4] = "Fresh";
      $status[5] = "Other";

      return $status;
    }

    function disposal_categories(){
      $status[1] = "Meat";
      $status[2] = "Vegetable";
      $status[3] = "Fruit";
      $status[4] = "Candy";
      $status[5] = "Dairy";
      $status[6] = "Other";

      return $status;
    }

     function disposal_reason(){
      $status[1] = "Expired";
      $status[2] = "Damaged";
      $status[3] = "Spilled";
      $status[4] = "Foul Smell";


      return $status;
    }

    function disposal_units(){
      $status[1] = "Litre";
      $status[2] = "KG";
      $status[3] = "Units";

      return $status;
    }
    function sample_types(){
      $status[1] = "Microbiology";
      $status[2] = "Chemical";
      $status[3] = "Other";

      return $status;
    }
}