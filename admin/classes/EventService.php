<?php 

    class EventService{

        public function hasImage($eventcode){

           $getimage=DB::getInstance()->query("SELECT id FROM future_event WHERE event_code='".$eventcode."'");

           if($getimage->count()){
               return true;
           } else{
               return false;
           }
           
        }
        public function getEventCategories(){
            $categs=DB::getInstance()->query("SELECT id, category_name, status FROM future_event_category WHERE status='ACTIVE'");
            $result="";
            if($categs->count()): foreach ($categs->results() as $category):
                $result.="<option value='".$category->id."'>".$category->category_name."</option>";
                endforeach;
            endif;

            return $result;
        }

        public function getEventTypes(){
            $types=DB::getInstance()->query("SELECT id, type_name, status FROM future_event_type WHERE status='ACTIVE'");
            $result="";
            if($types->count()): foreach ($types->results() as $type):
                $result.="<option value='".$type->id."'>".$type->type_name."</option>";
                endforeach;
            endif;
            
            return $result;
        }

        public function getEventCode($id){
            $types=DB::getInstance()->query("SELECT id, event_code, status FROM future_event WHERE  id='$id' AND status='ACTIVE'");
            $result="";
            if($types->count()): foreach ($types->results() as $type):
                    $result=$type->event_code;
                endforeach;
            endif;
            
            return $result;
        }

        public function getEventStartDate($id){
            $types=DB::getInstance()->query("SELECT id, start_date, status FROM future_event WHERE  id='$id' AND status='ACTIVE'");
            $result="";
            if($types->count()): foreach ($types->results() as $type):
                    $result=$type->start_date;
                endforeach;
            endif;
            
            return $result;
        }

        public function getEventEndDate($id){
            $types=DB::getInstance()->query("SELECT id, end_date, status FROM future_event WHERE  id='$id' AND status='ACTIVE'");
            $result="";
            if($types->count()): foreach ($types->results() as $type):
                    $result=$type->end_date;
                endforeach;
            endif;
            
            return $result;
        }

        public function getEventName($code){
            $events=DB::getInstance()->query("SELECT id, event_name, status FROM future_event WHERE  event_code='$code' AND status='ACTIVE'");
            $result="";
            if($events->count()): foreach ($events->results() as $event):
                    $result=$event->name;
                endforeach;
            endif;
            
            return $result;
        }

        public function getEventNameById($id){
            $events=DB::getInstance()->query("SELECT id, event_name, status FROM future_event WHERE  id='$id' AND status='ACTIVE'");
            $result="";
            if($events->count()): foreach ($events->results() as $event):
                    $result=$event->event_name;
                endforeach;
            endif;
            
            return $result;
        }

        



        public function getAllEventsNumber($user=""){

            if($user!=""){
                $user="AND client_id='".$user."'";
            }

            $events=DB::getInstance()->query("SELECT * FROM future_event WHERE status='ACTIVE' ".$user);
            
            
            
            return $events->count();
        }


        public function getAllEventsTypeNumber($user="", $type=""){

            if($user!=""){
                $user=" AND client_id='".$user."'";
            }

            if($type!=""){
                $type=" AND event_type='".$type."'";
            }

            $events=DB::getInstance()->query("SELECT * FROM future_event WHERE status='ACTIVE' ".$user.$type);
            
            
            
            return $events->count();
        }



        


    }

?>