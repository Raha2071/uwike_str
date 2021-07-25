

<?php

class User{
    private $_db,
            $_count = 0,
            $_data;
    public function __construct ($vendor = null) {
        $this->_db = DBConnection::getInstance();
    }
	// protected $table = "users";
	// protected $allowedFields = ["firstname","lastname","username","city","email","phone","country","password","priviledge","last_login","status","created_by"];
	// protected $useTimestamps = true;

	// public function checkUser($username,$key="email"){
	// 	$res = $this->where($key,$username)
	// 		->get();
	// 	return $res->getRow();
	// }

	// public function updateLogin($id){
	// 	return $this->where("email",$id)->update(null,array("last_login"=>time()));
	// }

    
        public function create($table = null, $data = array()) {
            if($this->_db->insert($table, $data)){
                // return true;
                throw new Exception ('There was a problem creating {$table}.');
            } else{
                return false;
            }
        }
}