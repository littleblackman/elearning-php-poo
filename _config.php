<?php
$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$root =  $_SERVER['DOCUMENT_ROOT'].'/';

// constant
define("HOST", $host.'myLibrary/' );
define("ROOT", $root.'myLibrary/' );

define("PARTIAL", ROOT.'partial/');
define("ASSETS", HOST.'assets/');
