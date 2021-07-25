<?php


/**
 * Class for encrypting password
 */

class Hash {

    public static function make($string) {
        return hash('sha256', $string.Hash::salt());
    }

    public static function salt() {
        return base64_encode("MERULUCIEN137");
    }

	public static function unique() {
        return self::make(uniqid());
	}
	
	public static function setEditKey($text=null,$var='ML')
		{
			$text=str_replace($var,'',$text);
			return $text=(int)$text*99343;	
		}

    public static function getEditKey($text=null,$var='ML',$size)
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