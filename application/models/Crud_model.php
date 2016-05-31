<?php





class Crud_model extends CI_Model {



        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function insert_info(){

         }

         public function get_row_count($tablename){

            return $this->db->count_all($tablename);

         }

         public function get_star($id){
          $this->db->select('*');
          $this->db->from('audits');
          $this->db->where("id_facility", $id);
          $this->db->where("rank <>", 0);
          $this->db->order_by('ended_at','DESC');
          $this->db->limit(3);
          $query = $this->db->get();
          return $query->result();
         }

          public function get_recent_audit_where($key, $val, $limit){
          $this->db->select('*');
          $this->db->from('audits');
          $this->db->where($key, $val);
          $this->db->order_by('doa','DESC');
          $this->db->limit($limit);
          $query = $this->db->get();
          return $query->result();
         }

      

         public function get_row_count_by_parameter($tablename,$key, $val){
            $this->db->select('*');
            $this->db->from($tablename);
            $this->db->where($key, $val);
            $query = $this->db->get();
            return $query->num_rows();
         }

         public function record_by_parameter($tablename,$key, $val){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where($key, $val);
           $query = $this->db->get();
           return $query->result();
         }

         public function record_by_two_parameter($tablename,$key1, $val1, $key2, $val2){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where($key1, $val1);
           $this->db->where($key2, $val2);
           $query = $this->db->get();
           return $query->result();
         }

         public function check_record($tablename,$key, $val){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where($key, $val);
           $query = $this->db->get();
           return $query->num_rows();
         }

         public function record_by_id($tablename, $id){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where('id', $id);
           $query = $this->db->get();
           return $query->result();
         }

         public function record_update($tablename,$key, $val, $data){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where($key, $val);
           unset($data[$key]);
           $this->db->update($tablename, $data);
         }

         public function record_update_by_two_parameter($tablename,$key1, $val1,$key2, $val2, $data){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where($key1, $val1);
           $this->db->where($key2, $val2);
           // // unset($data[$key1]);
           // // unset($data[$key2]);
           // print_r($data);
           $this->db->update($tablename, $data);
         }

         public function record_get($tablename, $key, $val){
           $this->db->select('*');
           $this->db->from($tablename);
           $this->db->where($key, $val);
           $query = $this->db->get();
           return $query->result();
         }

         public function record_insert($tablename, $data){
           return $this->db->insert($tablename, $data);
         }

         public function get_all_records($tablename){
           $this->db->select('*');
           $this->db->from($tablename);
           $query = $this->db->get();
           return $query->result();
         }

         public function get_columns($tablename, $columns){
           $this->db->select($columns);
           $this->db->from($tablename);
           $query = $this->db->get();
           return $query->result();
         }

         public function get_fields($tablename){
            return $this->db->list_fields($tablename);
         }

         public function delete_record($tablename, $id){
            $this->db->where('id',$id);
            $this->db->delete($tablename);
         }

         public function get_last_id(){
            return $insert_id = $this->db->insert_id();
         }

         public function record_insert_v2($tablename, $data){
            $this->db->insert($tablename, $data);
            return $insert_id = $this->db->insert_id();
         }

         public function delete_by_parameter($tablename, $column, $id)
         {
           $this->db->where($column, $id);
           $this->db->delete($tablename);
         }

         public function delete_by_two_parameter($tablename, $key1, $val1, $key2, $val2)
         {
           $this->db->where($key1, $val1);
           $this->db->where($key2, $val2);
           $this->db->delete($tablename);
         }

         public function get_count_by_equality($tablename, $col1, $col2){
            $this->db->select('*');
            $this->db->from($tablename);
            $str = "" . $col1 . " " . "=" . " " . $col2;
            $this->db->where("doa = started_at");
            $query = $this->db->get();
            return $query->num_rows();
         }

         public function get_count_by_equality_where($tablename, $col1, $col2, $key, $val){
            $this->db->select('*');
            $this->db->from($tablename);
            $str = "" . $col1 . " " . "=" . " " . $col2;
            $this->db->where("doa = started_at");
            $this->db->where($key, $val);
            $query = $this->db->get();
            return $query->num_rows();
         }


         public function field_increment($tablename,$id, $field){
          $this->db->select('*');
          $this->db->from($tablename);
          $this->db->where('id', $id);
          $str = $field . '+1'; 
          $this->db->set($field, $str, FALSE);
          $this->db->update($tablename);
         }

        public function get_sum_by_parameter($tablename,$key, $val, $col){
            $this->db->select('*');
            $this->db->from($tablename);
            $this->db->where($key, $val);
            $this->db->select_sum($col, 'sum');
            $query = $this->db->get();
            $result = $query->result();
            return $result[0]->sum;
         }

         public function get_sum_by_two_parameter($tablename, $tablename2, $join, $key, $val,$key2, $val2, $col){
            $this->db->select('*');
            $this->db->from($tablename);
            $this->db->join ( $tablename2, $join);
            $this->db->where($key, $val);
            $this->db->where($key2, $val2);
            $this->db->select_sum($col, 'sum');
            $query = $this->db->get();
            $result = $query->result();
            if(!$result[0]->sum){
              $result[0]->sum = 0;
            }
            return $result[0]->sum;
         }

         public function get_row_by_double_where($tablename, $key1, $val1, $key2, $val2){
               $this->db->select('*');
               $this->db->from($tablename);
               $this->db->where($key1, $val1);
               $this->db->where($key2, $val2);
               $query = $this->db->get();

               return $query->result();
         } 

          public function get_count_by_double_where($tablename, $key1, $val1, $key2, $val2){
               $this->db->select('*');
               $this->db->from($tablename);
               $this->db->where($key1, $val1);
               $this->db->where($key2, $val2);
               $query = $this->db->get();

               return $query->num_rows();
         }  

        

         //-----------------------------------------------------------------------//
         //                         Seatching Query                               //
         //-----------------------------------------------------------------------//


}

?>