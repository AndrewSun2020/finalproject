<?php
// connect to the mySQL databse, read the tables of the database called 'data',my mySQL port number is 8889
$link=@mysqli_connect('localhost','root','root','data','8889');
// if the peoblems occurs, then we use the cide below to locate the error
if(mysqli_connect_error()){
	echo 'Error code：'.mysqli_connect_errno(),'<br>';	
	echo 'Error details：'.mysqli_connect_error();		
}
// set the encoding commnicate mode with  mySQL databse is UTF-8
mysqli_set_charset($link,'utf8');
?>