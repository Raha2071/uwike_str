<?php 



    class ClientService{

        private $_table="future_client";
        

        public function getAllClients($searchKey=""){

            $sql="SELECT * FROM future_client WHERE status!='DELETED' ".$searchKey;
            $data=DB::getInstance()->query($sql);

            if($data->count()){
                return $data->results();
            }

            return false;
        }

        public function getAllClientsNumber(){
            $sql="SELECT * FROM future_client WHERE status!='DELETED'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
            
        }

        public function getAllActiveClientsNumber(){

            $sql="SELECT * FROM future_client WHERE status='ACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getAllUnactiveClientsNumber(){

            $sql="SELECT * FROM future_client WHERE status='UNACTIVE'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

        public function getClientId($code){

            $client_id="";
            $sql="SELECT * FROM future_client WHERE client_code='$code'";
            $data=DB::getInstance()->query($sql);

            if($data->count()):
                foreach($data->results() as $client):
                    $client_id=$client->id;
                endforeach;
            endif;
            
            return $client_id;

        }

        public function getAllRegisteredTodayClients(){
            $today=date('Y-m-d');
            $sql="SELECT * FROM future_client WHERE creation_date='".$today."'";
            $data=DB::getInstance()->query($sql);

            
            return $data->count();
        }

    }

?>