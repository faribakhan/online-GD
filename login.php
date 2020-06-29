<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php

require_once '_header.php';

require 'db.php';

session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not

	//$con = mysqli_connect("localhost","root","","onlinegd");

	$query = "SELECT * FROM `users` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: view.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
        <div class="container">
            <div class="col-sm-2"></div>
                <div class="col-sm-4 banner-info">
	
	
	<form action="" method="post" name="login">

	<h1>Log In</h1>
  <div class="form-group">
    <label size="3">Username</label>
    <input <input type="text" name="username" placeholder="Username" required class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-default" name="btn-login" value="Login">Submit</button>
</form> 
</form>

</div>
</div>
<br><br>

<?php } ?>
</body>
</html>