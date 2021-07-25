<?php
/**
 * Class for checking inputs in forms
 */

class Input {
    public static function exists($type = 'post') {
        switch($type) {
            case 'post':
                return (!empty($_POST)) ? true : false;
                break;
            case 'get':
                return (!empty($_GET)) ? true : false;
                break;
            default:
                return false;
                break;
        }
    }

    public static function get($item,$source = 'get'){
		switch($source){
			case 'post':
				if(isset($_POST[$item])){
					return $_POST[$item];
				}
			break;
			case 'get':
				if(isset($_GET[$item])){
					return $_GET[$item];
				}
			break;
		}
		return '';
	}
}