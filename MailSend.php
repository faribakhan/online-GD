<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

      $conn= mysqli_connect("localhost","root","","onlinegd");
	  
     //   $email = $_POST["email"];   
	    $trn_date = date("Y-m-d H:i:s");
		$name = $_POST['name'];
		$fathername = $_POST['fathername'];
		$mothername = $_POST['mothername'];
		$nid = $_POST['nid'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$birthdate = $_POST['birthdate'];
		$zipcode = $_POST['zipcode'];
		$gender = $_POST['gender'];
		$altphone = $_POST['altphone'];
		$permanentaddress = $_POST['permanentaddress'];
		$presentaddress = $_POST['presentaddress'];
		$i_date = $_POST['i_date'];
		$i_time = $_POST['i_time'];
	
		$i_description = $_POST['i_description'];
		$target1 = "images/".basename($_FILES['image1']['name']);
		$image1 = $_FILES['image1']['name'];
		$target2 = "images/".basename($_FILES['image2']['name']);
		$image2 = $_FILES['image2']['name'];
		$target3 = "images/".basename($_FILES['image3']['name']);
		$image3 = $_FILES['image3']['name'];
		$target4 = "images/".basename($_FILES['image4']['name']);
		$image4 = $_FILES['image4']['name'];

        //  $_SESSION["email"]=$email;
      
	  
	    $_SESSION['name1'] = $name;
		$_SESSION['fathername1'] = $fathername;
		$_SESSION['mothername1'] = $mothername;
		$_SESSION['nid1'] = $nid;
		$_SESSION['email1'] = $email;
		$_SESSION['gender1'] = $gender;
		$_SESSION['phone1'] = $phone;
		$_SESSION['phone2'] = $altphone;
		$_SESSION['birthdate1'] = $birthdate;
		$_SESSION['zipcode1'] = $zipcode;
		$_SESSION['permanentaddress1'] = $permanentaddress;
		$_SESSION['presentaddress1'] = $presentaddress;
		$_SESSION['i_date1'] = $i_date;
		$_SESSION['i_time1'] = $i_time;

		$_SESSION['i_description1']=$i_description;
		
		$_SESSION['target11'] = $target1;
		$_SESSION['image11'] = $image1;
	
		$_SESSION['target21'] = $target2;
		$_SESSION['image21'] = $image2;
      
		$_SESSION['target31'] = $target3;
		$_SESSION['image31'] = $image3;
		
		$_SESSION['target41'] = $target4;
		$_SESSION['image41'] = $image4;

	
          $a = rand(100,999999);
           //echo $a;
            $_SESSION["random"]=$a;
			


         $to = $email;
         $subject = "Your General Diary Submitting Varification Code";
         
         $message = "Your Varification Code is".$a. 
		 " Please enter this code in the verification code field. After entering this your complaint will be send to the station.";
         
         $header = "From:tasniafari@gmail.com \r\n";
         $header = "Cc:tasniafari@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";


         $retval = mail ($to,$subject,$message,$header);
        
         if( $retval == true ) {
           // echo "Message sent successfully...";
                       //   echo "Message sent successfully...'</br>'check your email for verification code".'<br>';
            
            $sql = "insert into random values (NULL,'$email',$a)";
            mysqli_query($conn,$sql);

            include ('VerifyEmail.php');

         }else {
           echo "<script>alert('Message could not be sent...');
			window.location.href='register.php';
			</script>";
		 } 
		
      ?>
      
   </body>
</html>				