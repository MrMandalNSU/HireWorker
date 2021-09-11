<?php

require_once('hirelogin.php');

function CheckID($userid){
	global $connection;
	$sql = "select 1 from customer where UserID = '$userid'";
	$result = mysqli_query($connection,$sql);
	$count = mysqli_num_rows($result);
	return $count;
}

function CheckPassword($userid){
	global $connection;
	$sql = "select * from customer where UserID = '$userid'";
	$result = mysqli_query($connection,$sql);
	$data = mysqli_fetch_assoc($result);
	return $data['Password'];
}

function CheckIDworker($userid){
	global $connection;
	$sql = "select 1 from worker where UserID = '$userid'";
	$result = mysqli_query($connection,$sql);
	$count = mysqli_num_rows($result);
	return $count;
}

function CheckPasswordworker($userid){
	global $connection;
	$sql = "select * from worker where UserID = '$userid'";
	$result = mysqli_query($connection,$sql);
	$data = mysqli_fetch_assoc($result);
	return $data['Password'];
}