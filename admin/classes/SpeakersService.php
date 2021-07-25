<?php 



    class SpeakersService{

        private $_table="future_sessions";
        

        public function getAllSpeakers($searchKey=""){

            $sql="SELECT * FROM future_speakers WHERE status!='DELETED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                return $data->results();
            }

            return false;
        }

        public function getAllSpeakersNumber($searchKey){
            $sql="SELECT * FROM future_speakers WHERE status!='DELETED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        

        public function getAllActiveSpeakersNumber(){

            $sql="SELECT * FROM future_speakers WHERE status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllUnactiveSpeakersNumber(){

            $sql="SELECT * FROM future_speakers WHERE status='UNACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllRegisteredTodaySpeakers(){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_speakers WHERE creation_date='".$today."'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getSpeakerCode($id){
            $today=date('Y-m-d');
            $sql="SELECT session_code FROM future_speakers WHERE id='".$id."'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $admin) {
                    return $admin->user_code;
                }
            }
            
            return false;
        }

        public function getSpeakerCategory($id){
            $today=date('Y-m-d');
            $sql="SELECT name FROM future_speaker_category WHERE id='".$id."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $session_category) {
                    return $session_category->name;
                }
            }
            
            return false;
        }

        public function getSpeakerSession($id){
            $today=date('Y-m-d');
            $sql="SELECT session_name , id FROM future_sessions WHERE id='".$id."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $session_category) {
                    return $session_category->session_name;
                }
            }
            
            return false;
        }

        public function getAllSpeakersGender($gender, $searchKey=""){
            $sql="SELECT * FROM future_speakers WHERE status!='DELETED' AND gender='$gender'".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllSpeakersCountriesNumber($searchKey=""){

            $sql="SELECT DISTINCT country FROM future_speakers WHERE status!='DELETED'".$searchKey;
            $data=DB::getInstance()->query($sql);

            return $data->count();
            
        }

        public function getAllSpeakersEvent($event){

            $sql="SELECT * FROM future_speakers WHERE status='ACTIVE' AND summit_id='$event'";
            $data=DB::getInstance()->query($sql);

            return $data->count();
            
        }

    }

?>