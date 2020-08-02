<?php
//Connect to database by a initialize code
require './conn.php';
//Use the 'id' which is send by list page to get information by id in the table called projectable
$sql="select * from projectdata where id={$_GET['id']}";	
$contactData=mysqli_query($link,$sql);	
// Make the array to be a associate array
$rows=mysqli_fetch_assoc($contactData);	
//Begin modifying
if(!empty($_POST)) {
	$id=$_GET['id'];		
	$name = addslashes($_POST['name']);
	$info = addslashes($_POST['info']);
	// Do update using the data from $post
	$sql="update projectdata set name='$name',info='$info' where id=$id"; 
	// Test and if there is any error, report details by bootstrap alert
	if(mysqli_query($link,$sql))
		header('location:list.php');
	else
	echo '<div class="alert alert-warning">
	<a href="#" class="close" data-dismiss="alert">
		&times;
	</a>
	<strong>Hello, there is an error.</strong>
	Your input is not correct. Please check and do not let the comma next to the semi column
	</div>';
	echo '<div class="alert alert-warning">
	<a href="#" class="close" data-dismiss="alert">
		&times;
	</a>
	<strong>Error detail</strong> '
	.mysqli_errno($link).' '.mysqli_error($link).
	'</div>';
	
}
?>
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
	 <input type="text" name="name" class="form-control-3 form-control-lg text-center " value='<?php echo $rows['name']?>'> 
</div>
	 <br/> 
	 <br/>
	 
	 <h2 style="color:white;">Info
	</h2>
	<div class="form-group">
	 <input type="text" name="info" class="form-control-3 form-control-lg text-center " required style="width:350px; height=50px;" value="<?php echo $rows['info']?>">
</div>
<br/>
<br/>
	<input class="btn btn-success btn-xs" type="submit" name="button" value="Update">
	<input class="btn btn btn-warning" type="button" value="Go Back" onclick="location.href='list.php'">
</form>
</div>
</div>
</body>
</html>
