<?php 



    class SessionService{

        private $_table="future_sessions";
        

        public function getAllSessions($searchKey=""){

            $sql="SELECT * FROM future_sessions WHERE status!='DELETED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                return $data->results();
            }

            return false;
        }

        public function getAllSessionsNumber($searchKey){
            $sql="SELECT * FROM future_sessions WHERE status!='DELETED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllActiveSessionsNumber(){

            $sql="SELECT * FROM future_sessions WHERE status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllUnactiveSessionsNumber(){

            $sql="SELECT * FROM future_sessions WHERE status='UNACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllRegisteredTodaySessions(){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_sessions WHERE creation_date='".$today."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getSessionCode($id){
            $today=date('Y-m-d');
            $sql="SELECT session_code FROM future_sessions WHERE id='".$id."'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $admin) {
                    return $admin->user_code;
                }
            }
            
            return false;
        }

        public function getSessionCategory($id){
            $today=date('Y-m-d');
            $sql="SELECT name FROM future_session_category WHERE id='".$id."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $session_category) {
                    return $session_category->name;
                }
            }
            
            return false;
        }

        public function getSParallelSessionId($code){
            $today=date('Y-m-d');
            $sql="SELECT id, session_name, status FROM future_parallel_sessions WHERE session_code='".$code."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $session) {
                    return $session->id;
                }
            }
            
            return 0;
        }

        public function getSParallelSessionName($id){
            $today=date('Y-m-d');
            $sql="SELECT id, session_name, status FROM future_parallel_sessions WHERE id='".$id."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $session) {
                    return $session->session_name;
                }
            }
            
            return "None";
        }



    }

?>