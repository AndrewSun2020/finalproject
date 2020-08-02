<?php
//Connect to database by a initialize code
require './conn.php';
//It's SQL command here, it is used to control the table of database to do the deleting opration
$sql="delete from projectdata where id={$_GET['id']}";
//Use bool result to ensure we get the working condition before jump to list, once error occurs, send the error back.
if(mysqli_query($link,$sql))
	header('location:./list.php');
else{
	echo 'Sorry, delete fail';
	echo 'Error code：'.mysqli_connect_errno(),'<br>';	
	echo 'Error details：'.mysqli_connect_error();	
}
?>