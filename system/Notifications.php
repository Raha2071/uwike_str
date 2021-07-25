<?php 

    class Notifications{

        private static $_instance = null;

        public static function getInstance() {
            if(!isset(self::$_instance)) {
                self::$_instance = new Time();
            }
            return self::$_instance;
        }


        public static function sendEmail($subject, $message, $recipients){

            $recipients_emails=$recipients;


            $request=array(
                "sendmail"=>"true",
                "subject"=>$subject,
                "message_body"=>$message,
                "email"=>$recipients_emails,
            );

            $url=appBaseURL."/notifications/mailling";

            try{

                Httprequests::curl_post_async($url,$request);

                
                return true; 
            }catch(Exception $e){
                echo $e->getMessage()." ".$e->getTrace();
                return false;
            }

        }


    }

?>