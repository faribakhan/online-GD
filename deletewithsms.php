<?php
require('db.php');
     
	$id=$_REQUEST['id'];
			
	$con=mysqli_connect("localhost","root","","onlinegd");
	$query = "SELECT * from victim where id='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error($con));
	$row = mysqli_fetch_assoc($result);


	$count=1; 
	$sel_query= "SELECT * from victim where id='".$id."'"; ;
	$result = mysqli_query($con,$sel_query);

	while($row = mysqli_fetch_assoc($result)){ 

	$email=$row["email"]; 
	
         $to = $email;
         $subject = "Your General Diary is rejected";
         
         $message = "
		 
		 Please, always give true information while lodging GD.
		 
		 ";
         
         $header = "From:onlinegd7@gmail.com \r\n";
         $header = "Cc:onlinegd7@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		$retval = mail ($to,$subject,$message,$header);

		
         if( $retval == true ) {

            
		$id=$_REQUEST['id'];
		$con = mysqli_connect('localhost', 'root', '', 'onlinegd');
		$query = "DELETE FROM victim WHERE id=$id"; 
		$result = mysqli_query($con,$query) or die ( mysqli_error($con));
		 echo "<script>alert('The GD has been deleted...');
			window.location.href='view.php';
			</script>";
         }else {
            echo "<script>alert('Message could not be sent...');
			window.location.href='view.php';
			</script>";
		 } 
		
		
		
		}    
?> 