<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "blog";

$connection = mysqli_connect($host, $user, $pass, $db);

if(!$connection){
	echo "error : " . die(mysqli_error($connection));
}
