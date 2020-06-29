<?php

        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);
   
      $conn= mysqli_connect("localhost","root","","onlinegd");

        $email = $_GET['emailid']; 

        $data = "";


       $sql = "select * from register where emailid = '$email'";

       $resu = mysqli_query($conn,$sql);
       
       $count = 0;

       while($temp = mysqli_fetch_assoc($resu))
       {
            $count ++;

        }

       if ($count > 0)
       {
            $data  = "email already exist";
       }
        else
       {
          $data = "you can register";
       }
         echo $data;
?>