<?php
require('db.php');
$id=$_REQUEST['id'];
$con = mysqli_connect('localhost', 'root', '', 'onlinegd');
$query = "DELETE FROM victim WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error($con));
header("Location: view.php"); 
?> 