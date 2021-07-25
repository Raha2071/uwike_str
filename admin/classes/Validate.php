<?php
/**
 * Class for form validation
 */

class Validate {
    private $_passed = false;
    private $_errors = array();
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array()) {
        foreach($items as $item => $rules) {
            foreach($rules as $rule => $rule_value) {
                $value = $source[$item];
                $item = escape($item);

                if($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required");
                } else if (!empty($value)) {
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value) {
                                $this->addError("{$item} must be a minimum of {$rule_value} characters.");
                            }
                            break;

                        case 'max':
                            if(strlen($value) > $rule_value) {
                                $this->addError("{$item} must be a maximum of {$rule_value} characters.");
                            }
                            break;
                        case 'matches':
                            if($value != $source[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}.");
                            }
                            break;
                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));

                            if($check->count()) {
                                $this->addError("{$item} already exists.");
                            }
                            break;
                        case 'type':
                            if ($rule_value == 'email') 
                                {
                                    if (!filter_input(INPUT_POST, $item, FILTER_VALIDATE_EMAIL)) 
                                        {
                                            $this->addError("{$item} must be a valid email");
                                        }
                                } 
                            elseif ($rule_value == 'number') 
                                {
                                    if (!filter_input(INPUT_POST, $item, FILTER_VALIDATE_FLOAT)) 
                                        {
                                            $this->addError("{$item} must be a valid number");
                                        }
                                }
                            break;
                    }
                }
            }
        }

        if(empty($this->_errors)) {
            $this->_passed = true;
        }
    }

    // Function to validate email addresses
    public static function ValidateEmail($email){
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) return true ; else return false;
    }  

    // Function to check if an element exists in the db
    public function emailExists($table,$email){
        $check = DB::getInstance()->query("SELECT email, id FROM ".$table." WHERE email='".$email."'");

            if($check->count()) {
                return true;
            }

        return false;
    }

    // Function to check if an emailexists only for a specific user
    public function emailNotUnique($table,$email, $id){
        $check = DB::getInstance()->query("SELECT email, id FROM ".$table." WHERE email='".$email."' AND id!='".$id."'");

            if($check->count()) {
                return true;
            }

        return false;
    }

    // Function to validate Alphabetic characters
    public static function ValidateAlphaCharacters($text){
        if (ctype_alpha(str_replace(array("\n", "\t", ' '), '',trim($text)))) return true ; else return false;
    }

    // Function to check string content
    public static function isEmpty($string){
        return empty($string) ? true :false;
    }
    
    // Function to validate the password requirements
    public static function passwordValidation($password,$size){
        
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < $size) 
            return false;
        else
            return true;
        

    }

    // Function to clean a String
    public static function string_cleaner($string) {
        $string = trim($string); 
        $string = strip_tags($string);
        $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
        $string = str_replace("\n", "", $string);
        $string = trim($string);
        return  preg_replace('/[^A-Za-z0-9 ]/', '', $string);
    }

    private function addError($error) {
        $this->_errors[] = $error;
    }

    public function errors() {
        return $this->_errors;
    }

    public function passed() {
        return $this->_passed;
    }
}
