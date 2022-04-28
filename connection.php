<?php

$dbhost = "localhost";
$dbuser = "u711142078_hc";
$dbpass = "2zB/|Oz[83";
$dbname = "u711142078_hc_users";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
