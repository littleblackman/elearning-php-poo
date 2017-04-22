<?php
// show errors if not in php.ini
ini_set('display_errors','on');
error_reporting(E_ALL);

// autoload all class in entity folder
function loadClass($class){
    include("entity/".$class.".php");
}
spl_autoload_register("loadClass");


$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';

// constant
define("HOST", $host.'myLibrary/' );
define("ROOT", $root.'myLibrary/' );

define("PARTIAL", ROOT.'partial/');
define("ASSETS", HOST.'assets/');
