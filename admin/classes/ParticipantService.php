<?php 



    class ParticipantService{

        private $_table="future_participants";
        

        public function getAllParticipants($searchKey=""){

            $sql="SELECT * FROM future_participants WHERE status!='DELETED' AND status!='ARCHIVED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                return $data->results();
            }

            return false;
        }

        public function getAllActiveParticipants($event){

            $sql="SELECT * FROM future_participants WHERE status='APPROVED' AND event_code='$event'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                return $data->count();
            }

            return false;
        }

        public function getAllParticipantsNumber($searchKey=""){
            $sql="SELECT * FROM future_participants WHERE status!='DELETED'".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllParticipantsGender($gender, $searchKey=""){
            $sql="SELECT * FROM future_participants WHERE status!='DELETED' AND gender='$gender'".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllParticipantGender($gender){
            $sql="SELECT * FROM future_participants WHERE status='APPROVED' AND gender='$gender'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllParticipantsCountriesNumber($searchKey=""){

            $sql="SELECT DISTINCT country FROM future_participants WHERE status!='DELETED'".$searchKey;
            $data=DB::getInstance()->query($sql);

            return $data->count();
            
        }

        public function getAllParticipantsIndustries($event){

            $sql="SELECT DISTINCT industry FROM future_participants WHERE status='APPROVED' AND event_code='$event'";
            $data=DB::getInstance()->query($sql);

            return $data->count();
            
        }

        public function getAllParticipantsCountries($event){

            $sql="SELECT DISTINCT country FROM future_participants WHERE status='APPROVED' AND event_code='$event'";
            $data=DB::getInstance()->query($sql);

            return $data->count();
            
        }

        public function getAllActiveParticipantsNumber($searchKey=""){

            $sql="SELECT * FROM future_participants WHERE status='ACTIVE'".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllUnactiveParticipantsNumber($searchKey=""){

            $sql="SELECT * FROM future_participants WHERE status='UNACTIVE'".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllRegisteredTodayParticipants($searchKey=""){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_participants WHERE creation_date='".$today."'".$searchKey;
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getParticipantCode($id){
            $today=date('Y-m-d');
            $sql="SELECT participant_code FROM future_participants WHERE id='".$id."'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $admin) {
                    return $admin->user_code;
                }
            }
            
            return false;
        }

        public function getParticipantCategory($code){
            $today=date('Y-m-d');
            $sql="SELECT name FROM future_participant_category WHERE category_code='".$code."' AND status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){

                foreach ($data->results() as $participant_category) {
                    return $participant_category->name;
                }
            }
            
            return false;
        }

        public function loginParticipant($username, $password){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_participants WHERE email='".$username."' AND password='$password' AND STATUS='APPROVED'";
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                
                return $data->results();
            }
            
            return false;
        }

        public function getParticipantAge($dob){
            $today=date('Y-m-d');
            
            if(!empty($dob)){
                $diff = abs(strtotime($today) - strtotime($dob));

                $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));


                return $years;
            }

            return "N/A";
        }

        

    }

?>