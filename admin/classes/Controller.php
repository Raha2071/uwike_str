<?php
class Controller {
    private $_db,
            $_count = 0,
            $_data;

    public function __construct ($vendor = null) {
        $this->_db = DB::getInstance();
    }

    public function create($table = null, $fields = array()) {
        if($this->_db->insert($table, $fields)){
            return true;
            // throw new Exception ('There was a problem creating {$table}.');
        } else{
            return false;
        }
    }

    public function get($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){
        $selectQuery = 'SELECT '.$rows.' FROM '.$table;
        if($join != null){
            $selectQuery .= ' JOIN '.$join;
        }
        if($where != null){
            $selectQuery .= ' WHERE '.$where;
        }
        if($order != null){
            $selectQuery .= ' ORDER BY '.$order;
        }
        if($limit != null){
            $selectQuery .= ' LIMIT '.$limit;
        }
        
        $data = $this->_db->query($selectQuery);

        if($data->count()){
            $this->_count = $data->count();
            $this->_data = $data->results();
        }
    }


    
    public function update($table = null, $fields = array(), $id = null) {
        if (!$id) {
            throw new Exception('Please enter {$table} id.');
        }
        
        if (!$this->_db->update($table, $id, $fields)) {
            throw new Exception('There was a problem updating {$table}.');
        }

        return true;
    }

    // Overloading the update function
    public function updates($table = null, $fields = array(), $field = null, $value=null) {
        if (!$value) {
            throw new Exception('Please enter {$table} key.');
        }
        
        if (!$this->_db->updates($table, $field, $value, $fields)) {
            throw new Exception('There was a problem updating {$table}.');
        }

        return true;
    }
    
    public function exists() {
        return (!empty($this->_data)) ? TRUE : FALSE;
    }
    
    public function delete($table = null, $where = array()){
        if ($this->_db->delete($table, $where)) {
            return TRUE;
        }
        return FALSE;
    }

    public function data() {
        return $this->_data;
    }

    // Getting participant email by code
    public function getParticipantEmailByCode($code){

        $sql="select email from future_participants where participant_code='$code'";
        $result=$this->_db->query($sql);

        if($result->count()): foreach ($result->results() as $res) {
                return $res->email;

            }
        endif;
    }

    // Getting participant name by code
    public function getParticipantNameByCode($code){

        $sql="select first_name, last_name from future_participants where participant_code='$code'";
        $result=$this->_db->query($sql);

        if($result->count()): foreach ($result->results() as $res) {
                return $res->first_name." ".$res->last_name;

            }
        endif;
    }

    public function count(){
        return $this->_count;
    }
}
?>