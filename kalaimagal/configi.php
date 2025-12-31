<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

define("DB_HOST", '13.126.52.143');
define("DB_USER", 'main');
define("DB_PASS", 'P@mani4u');
define("DB_NAME", 'kalaimagal_thiru');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}else{
    // echo "Connected successfully";
}
$mysqli -> set_charset("utf8");
?>