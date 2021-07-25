<?php

/**
 * Title: Core Initializer
*/


session_start();
require_once("Config.php");

// ENABLING SSL 

// if($_SERVER['HTTP_HOST'] != 'localhost' && $_SERVER['HTTP_HOST'] != '127.0.0.1'){
//     $http = 'http'; 
//     if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
//         $redirect = $http.'://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//         header('HTTP/1.1 301 Moved Permanently');
//         header('Location: ' . $redirect);
//         exit();
//     }
// }else{
//     $http = 'http';
// }


// GLOBAL VALUES
$GLOBALS['config'] = array(
    'dbc' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'uwike_store',
    ),

    'server' => array(
        'address' => 'http://localhost',
        'appName' => 'uwike_str'
    ),

);


// Application keywords definition
function def(){
	
    define("P",".php");
    define("_","/"); 
	define("_PATH_","/");
	define("_VIEWS_","resources/views");
	define("LANG","EN");
	define("TF","d/m/Y");
	define("appBaseURL", Config::get('server/address')._.Config::get('server/appName')); 
    define("LOGIN", appBaseURL."/login");
    define("appName", Config::get('server/appName'));
}

// Calling the def function
def();

// INCLUDING THE CLASSES GLOBALLY
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/system/General.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/system/DataValidation.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/system/Time.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/system/Input.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/app/modal/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/app/Config/DBConnection.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/app/security/Hash.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/app/security/Session.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/system/Httprequests/Httprequests.php';
require_once $_SERVER['DOCUMENT_ROOT'] ."/". appName.'/system/Notifications.php';

// Autoloading all the Service classes
spl_autoload_register(function($class) {
  require_once $_SERVER['DOCUMENT_ROOT'] ."/".appName.'/app/modal/' . $class . '.php';
});



// Application scope variables - Global variables

    // Web pages directory
    $WEB=$_SERVER['DOCUMENT_ROOT'] ."/". appName."/publilc";

    // Includes directory
    // $INC_DIR =$WEB."/includes";

    // Upload
    // $ARCHIVES_DIR = $WEB."/assets/archives";

    // Download
    // $ARCHIVES= appBaseURL."/web_pages/assets/archives";


    // Entities
    $userBean= new User();
    // $archiveBean= new Archive();
    // $reportBean= new Report();


?>