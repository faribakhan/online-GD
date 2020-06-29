<html>
<?php
	include '_header.php';
	include '_header2.php';

	?><head>

<title>

Verify Email
</title>
</head>
<body>
<div class="container">
         Message sent successfully...'</br>'check your email for verification code<br>
<form name="ve" class="form" method="post" action="register_process.php">

<input type="text" name="code" placeholder="verification code"><br>
<input type="submit" name="register" value="register">
<input type="reset" name="clear" value="clear">
</form></div>
<body>
</html>
<?php
	include 'footer.php';
	?>