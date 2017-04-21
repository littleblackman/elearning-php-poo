<?php
// show errors if not in php.ini
ini_set('display_errors','on');
error_reporting(E_ALL);

$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';

// constant
define("HOST", $host.'myLibrary/' );
define("ROOT", $root.'myLibrary/' );

define("PARTIAL", ROOT.'partial/');
define("ASSETS", HOST.'assets/');
