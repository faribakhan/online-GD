<?php 
	include '_header.php';
	include '_header2.php';
	include 'database.php';
?>





      <?php
       
         session_start();
         
        error_reporting(E_ALL ^ E_DEPRECATED);
    

        $v;
        $e="";

		$email = $_SESSION['email1'];
        $veri_code = $_POST["code"];
	   
        $conn= mysqli_connect("localhost","root","","onlinegd");

        $retval = "select * from random where ran_num = $veri_code";

        $res = mysqli_query($conn,$retval);
   
         while($temp=mysqli_fetch_assoc($res))
                { 
			
                    		$e = $temp['emailid'];
                                $v = $temp['ran_num'];
                                
                  }
         
         if($v == $veri_code and $e == $email)
          {
		$trn_date = date("Y-m-d H:i:s");
		$name = $_SESSION['name1'];
		$fathername = $_SESSION['fathername1'];
		$mothername = $_SESSION['mothername1'];
		$nid = $_SESSION['nid1'];
		$email = $_SESSION['email1'];
		$phone = $_SESSION['phone1'];
		$altphone = $_SESSION['phone2'];
		$birthdate = $_SESSION['birthdate1'];
		$zipcode = $_SESSION['zipcode1'];
		$gender = $_SESSION['gender1'];
		$permanentaddress = $_SESSION['permanentaddress1'];
		$presentaddress = $_SESSION['presentaddress1'];
		$i_date = $_SESSION['i_date1'];
		$i_time = $_SESSION['i_time1'];
		$i_description = $_SESSION['i_description1'];

        $target1 = $_SESSION['target11'];
		$image1 = $_SESSION['image11'];
		$target2 = $_SESSION['target11'];
		$image2 = $_SESSION['image21'];
		$target3 = $_SESSION['target11'];
		$image3 = $_SESSION['image31'];
		$target4 = $_SESSION['target41'];
		$image4 = $_SESSION['image41'];
			  
             $sql2 = "INSERT INTO victim (name,fathername,mothername,nid,email,phone,valtphone,birthdate,gender,zipcode,permanentaddress,
		presentaddress,i_date,i_time,i_description,image1,image2,image3,image4,entrytime) 
		VALUES('$name','$fathername','$mothername','$nid', '$email', '$phone','$altphone', '$birthdate','$gender',
		'$zipcode', '$permanentaddress','$presentaddress',
		'$i_date', '$i_time', '$i_description', '$image1', '$image2', '$image3', '$image4', '$trn_date')";
             
			 $result = mysqli_query($conn,$sql2);             
			 
			 if($result == 1 ){
			echo "<script>alert('Your given information has sent to the police station. Please wait while they confirm the GD and sent you the link containing the verified copy. If your GD is rejected an email will be sent to your email address');
			window.location.href='index.php';
			</script>";
			
				}else{
					
					echo "<script>alert('There was a problem to upload data.');
			window.location.href='register.php';
			</script>";
					
					//echo "There was a problem to upload data.";
				}	    
			}
			else
			{
					echo "<script>alert('You have entered something wrong.');
			window.location.href='register.php';
			</script>";
					
            // echo "You have entered something wrong";
			}

      ?>
      <html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opinion</title>
</head>
<body>
	

	<style>
		h1 {
			text-align: center;
			font-size: 45px;
			margin-top: 65px;
			color: red;
			text-shadow: 3px 3px 3px black;
		}

		.yesornot {
			text-align: center;
			margin-top: 20px;
		}
		.yesornot a {
			text-decoration: none;
			font-size: 40px;
			color: blue;
		}
		.yesornot strong:hover a {
			font-size:45px;
			color: green;
		}
		.yesornot b:hover a {
			font-size:45px;
			color: red;
		}
		.yesornot span {
			margin:0 25px;
			color: red;
		}
	</style>
</body>
</html>
	   


<?php include 'inc/footer.php' ?>