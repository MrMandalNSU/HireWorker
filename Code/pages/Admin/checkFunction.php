<?php
require_once('connection.php');

function CheckPassword($user_id, $password){
	global $connection;
	$sql = "select * from admin where User_Id = '$user_id' and password='$password'";
	$result = $connection->query($sql);
        if ($result->num_rows == 1) {
            return true;
        } else {
            return false;
        }
}
function GetAllCustomer(){
	global $connection;
	$sql="select * from customer";
	$result=$connection->query($sql);
	return $result;

}
function GetAllworker(){
	global $connection;
	$sql="select * from worker";
	$result=$connection->query($sql);
	return $result;



}