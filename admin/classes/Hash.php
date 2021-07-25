<?php


/**
 * Class for encrypting password
 */

class Hash {
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }

    public static function salt($length) {
        return mcrypt_create_iv($length);
    }

    public static function salty($length){
		return md5($length);
	}

    public static function unique() {
        return self::make(uniqid());
	}
	
	// Generating participants code
	public static function getParticipantCode($category){
		$participant_code="10000";
		$sql="SELECT id FROM future_participants ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$participant_code+$item->id+1;
			$participant_code=$category."-".$suffix;

		}
		endif;

		return $participant_code;
	}

	// Generating event codes
	public static function getEventCode($prefix){
		$event_code_range="10000";
		$event_code=$prefix."-".Hash::setEditKey($event_code_range);
		$sql="SELECT id FROM future_event ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$event_code_range+$item->id+1;
			$event_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $event_code;
	}

	// Generating event codes
	public static function getSpeakerCode($prefix){
		$speaker_code_range="10000";
		$speaker_code=$prefix."-".Hash::setEditKey($speaker_code_range);
		$sql="SELECT id FROM future_speakers ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$speaker_code_range+$item->id+1;
			$speaker_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $speaker_code;
	}

	// Generating Admin codes
	public static function getAdminCode($prefix){
		$admin_code_range="10000";
		$admin_code=$prefix."-".Hash::setEditKey($admin_code_range);
		$sql="SELECT id FROM future_admin_user ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$admin_code_range+$item->id+1;
			$admin_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $admin_code;
	}

	// Generating Session codes
	public static function getSessionCode($prefix){
		$session_code_range="10000";
		$session_code=$prefix."-".Hash::setEditKey($session_code_range);
		$sql="SELECT id FROM future_sessions ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$session_code_range+$item->id+1;
			$session_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $session_code;
	}

	// Generating Parallel Session codes
	public static function getParallelSessionCode($prefix){
		$session_code_range="10000";
		$session_code=$prefix."-".Hash::setEditKey($session_code_range);
		$sql="SELECT id FROM future_parallel_sessions ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$session_code_range+$item->id+1;
			$session_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $session_code;
	}



	// Generating clients codes
	public static function getClientCode($prefix){
		$client_code_range="10000";
		$client_code=$prefix."-".Hash::setEditKey($client_code_range);
		$sql="SELECT id FROM future_client ORDER BY id desc LIMIT 1";
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$client_code_range+$item->id+1;
			$client_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $client_code;
	}

	// Generating destination code
	public static function getDestinationCode($prefix){
		$client_code_range="10000";
		$client_code=$prefix."-".Hash::setEditKey($client_code_range);
		$sql="SELECT id FROM future_homepage_destination ORDER BY id desc LIMIT 1"; 
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$client_code_range+$item->id+1;
			$client_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $client_code;
	}

	// Generating the program code
	public static function getProgramCode($prefix){
		$client_code_range="10000";
		$client_code=$prefix."-".Hash::setEditKey($client_code_range);
		$sql="SELECT id FROM future_programs ORDER BY id desc LIMIT 1"; 
		$results=DB::getInstance()->query($sql);

		if($results->count()):foreach ($results->results() as $item) {
			$suffix=$client_code_range+$item->id+1;
			$client_code=$prefix."-".Hash::setEditKey($suffix);

		}
		endif;

		return $client_code;
	}



    public static function setEditKey($text=null,$var='F')
		{
			$text=str_replace($var,'',$text);
			return $text=(int)$text*99343;	
		}

    public static function getEditKey($text=null,$var='F',$size)
		{
			$text=$text/99343;
			//$count=$size-strlen($text)
			while(strlen($text)<$size)
				{
					$text='0'.$text;
				}
			return$text=$var.$text;	
		}

	public static function RandNumber($min=1000000000000000,$max=9999999999999999)
			{
				return rand($min,$max);
			}

	public  static function serialnumber($length = 32, $add_dashes = false, $available_sets = 'ka'){
				$sets = array();
				if(strpos($available_sets, 'o') !== false)
					$sets[] = 'abcdefghjkmnpqrstuvwxyz';
				if(strpos($available_sets, 'k') !== false)
					$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
				if(strpos($available_sets, 'a') !== false)
					$sets[] = '23456789';
				if(strpos($available_sets, 'p') !== false)
					$sets[] = '!@#$%&*?';
				$all = '';
				$password = '';
				foreach($sets as $set){
					$password .= $set[array_rand(str_split($set))];
					$all .= $set;
				}
				$all = str_split($all);
				for($i = 0; $i < $length - count($sets); $i++)
					$password .= $all[array_rand($all)];
				$password = str_shuffle($password);
				if(!$add_dashes)
					return $password;
				$dash_len = floor(sqrt($length));
				$dash_str = '';
				while(strlen($password) > $dash_len)
				{
					$dash_str .= substr($password, 0, $dash_len) . '-';
					$password = substr($password, $dash_len);
				}
				$dash_str .= $password;
				return $dash_str;
	}
	
}