<?php //

class Crud_model extends CI_Model{
    //return type TRUE => STD-OBJECT
    //return type FALSE => ARRAY
    public $return_type = TRUE;
    function __construct() {
        parent::__construct();
    }
    
    /**
     * 
     * @param string $table
     * @return stdClass object
     */
    public function get_all($table){
        $query = $this->db->get($table);
        return $query->result();
        
    }
    
    /**
     * @desc get the count from table with specified condition
     * @param array $where
     * @param string $table
     * @return int count
     */
    public function count($where = [], $table = ""){
        $table = $table != "" ? $table: $this->table;
        
        
         $this->db->select("count($table.id) as count");
        
        if(count($where)){
            $this->db->where($where);
        }
        
               $query = $this->db->get($table);
        
//        echo $this->db->last_query();
        
        if($query->num_rows()> 0){
             return $query->row()->count;
        }
        
        
        return 0;
    }
    
    /**
     * 
     * @param array $where
     * @param string $columns
     * @return \stdClass
     */
    function get_one_where($where = array(),$columns="*") {
        //extra condition
        $this->db->select($columns);
        
        
        $result = $this->db->get_where($this->table, $where, 1);
        if ($result->num_rows()) {
            return $result->row();
        } else {
            $db_fields = $this->db->list_fields($this->table);
            $fields = new stdClass();
            foreach ($db_fields as $field) {
                $fields->$field = "";
            }
            return $fields;
        }
    }

    /**
     * @desc insert into db
     * @param type $data
     * @return boolean
     */
    function _insert($data,$table = ''){
        if ($table != ""):
            $this->db->insert($table, $data);
        else:
            $this->db->insert($this->table, $data);
        endif;
        $insert_id = $this->db->insert_id();
         
         if($insert_id){
             return $insert_id;
         }else{
             return FALSE;
         }
         
    }
    /**
     * 
     * @param type $data
     * @param type $where
     * @return boolean
     * 
     */
    function update_where($data = array(), $where = array(),$table = '') {
        $this->table = ($table != '')? $table: $this->table;
        if (count($where)) {
            if ($this->db->update($this->table, $data, $where)) {
                $id = element("id", $where);
                if ($id) {
                    return $id;
                } else {
                    return false;
                }
            }
        }
    }
    
    /**
     * @desc insert the batch data
     * @param array $data
     * @param string $table
     * @return 
     */
    function insert_batch_data($data, $table){
        $this->db->insert_batch($table, $data);
    }
    
    /**
     * @desc use to check whether value is unique or not
     * @param string $column_name
     * @param string/integer $field_value
     * @return int
     */
    function check_unique_field($column_name, $field_value){
        $this->db->where($column_name, $field_value);
        
        return $this->db->get($this->table)->num_rows();
    }
    
}