<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
<style>

	body{font-family:Arial, Helvetica, sans-serif;}
	*{box-sizing: border-box}
	input[type=text],
	input[type=[password]{
		width:100%;
		padding:15px;
		margin: 5px 0 22px 0;
		display:inline-block;
		border:none;
		background: #f1f1f1;
	}
	</style>

</head>
<body>
<?php

require_once '_header.php';

require('db.php');
require('auth.php');
// If form submitted, insert values into the database.
if (isset($_POST['username']) && !empty($_POST['username']) AND isset($_POST['password']) && !empty($_POST['password'])){
        // removes backslashes
	$username = stripslashes($_POST['username']);
        //escapes special characters in a string
	$username = mysqli_escape_string($con,$username); 
	$password = stripslashes($_POST['password']);
	$password = mysqli_escape_string($con,$password);
	$passwordrpt = stripslashes($_POST['password-repeat']);
	$passwordrpt = mysqli_escape_string($con,$passwordrpt);
	$trn_date = date("Y-m-d H:i:s");
    
   if($password == $passwordrpt){
    $query = "INSERT into `users` (username, password, trn_date)
VALUES ('$username', '$password', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result == 1 ){
                      echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a> or here to <a href='view.php'>View data</a></div>";
        } 
        
    }else{ echo "invalid password or username"; }
}
?>
<div class="form">
<div class="col-md-2"></div>
<h1>Registration</h1>


			<div class="panel-body">
			


<form class="col-md-8" name="registration" action=""  method="post" enctype="multipart/form-data">
<div style="max-width: 400px; margin: 0 auto;">
<div class="form-group">
<label for="username">USERNAME</label>
<input type="text" name="username" class="form-control" placeholder="Username" required /></br></div>
<div class="form-group">
<label for="username">Password</label>
<input type="password" name="password" placeholder="Password" class="form-control" required /></br></div>
<div class="form-group">
<label for="username">Repeat Password</label>
<input type="password" name="password-repeat" placeholder="Repeat Password" class="form-control" required /></br></div>

<p>please fill in this form to register your user name and password</p>
<button type="submit" name="submit" class="signupbtn" value="Register" />Register</button><br><br>
</form>
</div>
</div>
</div>
</body>
</html>