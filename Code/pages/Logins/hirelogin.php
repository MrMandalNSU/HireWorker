<?php
$hostName = 'localhost';
$user = 'root';
$password = '';
$dbname = 'hireworker';

$connection = mysqli_connect($hostName,$user,$password,$dbname);
if(!$connection){
	die('Unable to connect: '.mysqli_connect_error());
}
