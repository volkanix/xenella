<?php
session_start();
$conn=new MySQLi("localhost","root","","xenella");

$count_new = 0;

if(count($_GET) == 2){

$conn=new MySQLi("localhost","root","","xenella");


 $email = $_GET['email'];
 $password = $_GET['password'];
 $password_enc = md5($password);

	$query_to_check=$conn->query("SELECT * FROM users WHERE email='$email' && password='$password_enc'");
	$checked=$query_to_check->num_rows;

	if($checked > 0){ 
		$query_user_id = "SELECT * FROM users WHERE email='$email' && password='$password_enc'";
		$newresult_user_id = $conn->query($query_user_id);
		$row_user_id = $newresult_user_id->fetch_assoc();
		$user_id = $row_user_id['user_id'];
		$_SESSION['user_id'] = $user_id; 
		echo "allow";
	}else{
		echo "not_found";
	}

}
?>