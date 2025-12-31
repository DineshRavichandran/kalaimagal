<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_NAME", 'kalaimagal_thiru');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}else{
    // echo "Connected successfully";
}
$mysqli -> set_charset("utf8");
?>