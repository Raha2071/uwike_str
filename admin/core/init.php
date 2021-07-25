<?php
/**
 * Title: Core Initializer
 */

session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'uwike_store',
        //'db' => 'torus'
    ),


    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'sessions' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    ),
    'server' => array(
        'name' => 'http://127.0.0.1/uwikeold/'
        //'name'=>'http://torusguru.com/future/'
    ),

    'urls'=>array(
        'smtp' => 'http://127.0.0.1/uwikeold/admin/sendemail'
        //'smtp'=>'http://torusguru.com/future/admin/sendemail'
    )
);

require_once $_SERVER['DOCUMENT_ROOT'] . '/uwikeold/admin/functions/functions.php';
spl_autoload_register(function($class) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/uwikeold/admin/classes/' . $class . '.php';
  });

 
