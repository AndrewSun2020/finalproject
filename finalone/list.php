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

<body style="background: url(./images/marble.jpg) no-repeat;
             background-size:100%;">
<?php
//Connect to database by a initialize code
require './conn.php';
//Read all data from table called projectdata and save the result into $contactData
$contactData=mysqli_query($link,'select * from projectdata order by id desc');	
// Make the array to be a associate array
$list=mysqli_fetch_all($contactData,MYSQLI_ASSOC);	
?>

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
	
<div class="col-md-12 text-center">
<a class="btn btn-primary" href="./add.php" role="button">Add a new person </a>
</div>
<div class="table-responsive">
<table class="table table-hover">
	<!-- table head begin -->
	<tr>
		<th>Number</th> 
		<th>Contact person</th> 
		<th>Contact Information</th> 
		<th>File creation time</th> 
		<th>View or update</th>
		<th>Delete</th>
		<!-- table head end -->
		<!--Begin foreach loop to load the data into every row of the data-->
		<?php foreach($list as $rows):?>
		<tr>
			<td><?php echo $rows['id']?>
		</td>
			<td><?php echo $rows['name']?>
		</td>
			<td><?php echo $rows['info']?>
		</td>
			<td><?php echo date('Y-m-d H:i:s',$rows['createtime'])?>
		</td>
			<td><input class="btn btn-success btn-xs" type="button" value="View or update" onclick="location.href='edit.php?id=<?php echo $rows['id']?>'">
		</td>
			<td><input class="btn btn-danger btn-xs"type="button" value="Delete info" 
			onclick="if(confirm('Are you sure to delete contact information? '))location.href='./del.php?id=<?php echo $rows['id']?>'">
		</td>
		</tr>
		<?php endforeach;?>
	</tr>
</table>
		</div>
</body>
</html>