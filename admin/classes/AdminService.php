<?php 



    class AdminService{

        private $_table="future_admin_user";
        

        public function getAllAdmins($searchKey=""){

            $sql="SELECT * FROM future_admin_user WHERE status!='DELETED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                return $data->results();
            }

            return false;
        }

        public function getAllAdminsNumber(){
            $sql="SELECT * FROM future_admin_user WHERE status!='DELETED'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllActiveAdminsNumber(){

            $sql="SELECT * FROM future_admin_user WHERE status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllUnactiveAdminsNumber(){

            $sql="SELECT * FROM future_admin_user WHERE status='UNACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllRegisteredTodayAdmins(){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_admin_user WHERE join_date='".$today."'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAdminCode($id){
            $today=date('Y-m-d');
            $sql="SELECT user_code FROM future_admin_user WHERE id='".$id."'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $admin) {
                    return $admin->user_code;
                }
            }
            
            return false;
        }

        public function loginAdmin($username, $password){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_admin_user WHERE email='".$username."' AND password='$password'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                
                return $data->results();
            }
            
            return false;
        }

    }

?>