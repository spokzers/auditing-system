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




}

?>
