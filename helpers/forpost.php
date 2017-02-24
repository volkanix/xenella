<?php
session_start();

$conn=new MySQLi("localhost","root","","xenella");

$user_id = $_SESSION['user_id'] ;

$count_new = 0;

if(count($_GET) == 1){

$conn=new MySQLi("localhost","root","","xenella");
	
	 	$post = $_GET['comment'];

		$user_id = $_SESSION['user_id'];
	
		$query= "SELECT * FROM users WHERE user_id='$user_id'";
		$newresult = $conn->query($query);
		$row = $newresult->fetch_assoc();
		$email = $row['email']; 
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];


		$query_select_id= "SELECT * FROM posts ORDER BY id DESC";
		$newresult_select_id = $conn->query($query_select_id);
		$row_select_id = $newresult_select_id->fetch_assoc();
		$id = $row_select_id['id'];

		$post_id = $id + 1;


		$addingposts = "INSERT INTO posts VALUES ('','$user_id','$post_id','$email','$first_name','$last_name','$post',now())"; 
		$r= $conn->query($addingposts);
		
		if($r){
		   echo "success";	
		}else{
		   echo "Wrong";
		}	
}
?>