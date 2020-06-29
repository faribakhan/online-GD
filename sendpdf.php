<?php

require('db.php');
include("auth.php");


$id=$_REQUEST['id'];

$sel_query= "SELECT * from victim where id='".$id."'"; ;
$result = mysqli_query($con,$sel_query) or die ( mysqli_error());
while($row = mysqli_fetch_assoc($result)){ 


$id=$row["id"]; 
//$hash=$row["hash"]; 
	    $trn_date = date("Y-m-d H:i:s");
		$name =$row['name'];
		$fathername = $row['fathername'];
		$mothername = $row['mothername'];
		$nid = $row['nid'];
		$email = $row['email'];
		$phone = $row['phone'];
		$birthdate = $row['birthdate'];
		$zipcode = $row['zipcode'];
		$gender = $row['gender'];
		$valtphone = $row['valtphone'];
		$permanentaddress = $row['permanentaddress'];
		$presentaddress = $row['presentaddress'];
		$i_date = $row['i_date'];
		$i_time = $row['i_time'];
	
		$i_description = $row['i_description'];
	

         $to = $email;
         $subject = "Your General Diary SoftCopy";
         
         $message = "
		 
		 Here is your softcopy of the lodged GD complaint.
		 Please click the link to get the PDF:
		 http://localhost/onlinegd/pdf.php?id=$id'
		 
		 
		 ";
         
         $header = "From:onlinegd7@gmail.com \r\n";
         $header = "Cc:onlinegd7@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

		$retval = mail ($to,$subject,$message,$header);

		
         if( $retval == true ) {

					echo "<script>alert('The softcopy has sent to the victim.');
			window.location.href='view.php';
			</script>";
						
         }else {
			 echo "<script>alert('Message could not be sent...');
			window.location.href='view.php';
			</script>";
			 
    //        echo "Message could not be sent...";
		 } 		
}   