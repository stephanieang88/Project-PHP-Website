<?php

   ob_start(); // output buffering is turned on

   session_start(); // turn on sessions

   // Assign file paths to PHP constants
   //__FILE__ returns the current path to this file
   // dirname() returns the path to the parent directory
   #########################################################################
   // assign to directory 'm+_montessori/private'
   define("PRIVATE_PATH", dirname(__FILE__));
   // assign to directory 'm+_montessori'
   define("PROJECT_PATH", dirname(PRIVATE_PATH));
   // assign to directory 'm+_montessori/public'

   define("PUBLIC_PATH", PROJECT_PATH . '/public');
   // assign to directory 'm+_montessori/private/shared
   define("SHARED_PATH", PRIVATE_PATH . '/shared');

   // Assign the root URL to a PHP constant
   // * Do not need to include the domain
   // * Use same document root as webserver
   // * Can set a hardcoded value:
   //   define("WWW_ROOT", 'globe_bank/public');
   //   define("WWW_ROOT", '');
   // * Can dynamically find everything in URL up to "/public"
   #########################################################################
   // find position of the first occurence of '/public' inside '$_SERVER['SCRIPT_NAME']' and then add 7
   $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
   // return part of $_SERVER['SCRIPT_NAME'] from the start of first character with character length specifed by $public_end
   $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
   // define constant "WWW_ROOT" as the value of $doc_root
   define("WWW_ROOT", $doc_root);

   require_once('functions.php');
   require_once('database.php');
   require_once('query_functions.php');
   require_once('validation_functions.php');
   require_once('auth_functions.php');

   // Log into database whenever web page loads
   $db = db_connect();

   // To initialize $errors variable for tracking errors
   $errors = [];

?>
