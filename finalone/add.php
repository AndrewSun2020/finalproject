<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Andrew Contacts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/contacts.css">
</head>

<body style="background: url(./images/func2.jpg) no-repeat;
    background-size:100%;">
<?php
if(!empty($_POST)) {
	//Connect to database by a initialize code
	require './conn.php';
	//Get the unix timestamp
	$time=time();	
	$name = addslashes($_POST['name']);
	$info = addslashes($_POST['info']);
	// use SQL command to insert the information posted by the 'add' page to the table 'projectdata'
	$sql="insert into projectdata values (null,'{$name}','{$info}',$time)";
	
	// if inserting successful, then show in the list page, if not, use bootstrap alert to report the error
	if(mysqli_query($link,$sql))
		header('location:./list.php');	
	else{
		echo '<div class="alert alert-warning">
		<a href="#" class="close" data-dismiss="alert">
			&times;
		</a>
		<strong>Hello, there is an error.</strong>
	    </div>';
		echo '<div class="alert alert-warning">
		<a href="#" class="close" data-dismiss="alert">
			&times;
		</a>
		<strong>Error detail</strong> '
		.mysqli_errno($link).' '.mysqli_error($link).
		'</div>';
		
	}
}
?>

<!-- HTML BEGIN -->
<!-- Navigation bar begin -->
<div class="shortcut">
        <div class="displayCentre">
            <div class="fl">
                <ul>
                    <li>Welcome to Andrew Contacts！ </li>
                    <li>
                        <i>Please</i>
                        <a href="signup.html" class="red">Log in or sign up</a>
                        
                    </li>
                </ul>
            </div>
            <div class="fr">
                <ul>

                    <li><a class="red" href="aboutme.html">About</a><i>|</i></li>
                    <li><a class="red" href="mailto:ys95@st-andrews.ac.uk">Contact me</a><i>|</i></li>
                </ul>
            </div>
        </div>
    </div>
	<!-- Navigation bar end -->
	<div class="container">
<div class="col-md-12 text-center form-group">
<form method="post" action="">
	  <h2 style="color:white;">Name
	</h2>
	<div class="form-group">
	 <input type="text" name="name" class="form-control-3 form-control-lg text-center " required> 
</div>
	 <br/> 
	 <br/>
	 
	 <h2 style="color:white;">Info
	</h2>
	<div class="form-group">
	 <input type="text" name="info" class="form-control-3 form-control-lg text-center " required style="width:350px; height=50px;" required>
</div>
<br/>
<br/>
	<input class="btn btn-success btn-xs" type="submit" name="button" value="Add new person">
	<input class="btn btn btn-warning" type="button" value="Go Back" onclick="location.href='list.php'">
</form>
</div>
</div>
</body>
</html>
<!-- HTML END -->
