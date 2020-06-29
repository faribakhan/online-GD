<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.

$con = mysqli_connect("localhost","root","","onlinegd");
// Check connection
mysqli_set_charset($db,"utf8");
$db_create ="CREATE DATABASE IF NOT EXISTS onlinegd CHARACTER SET utf8 COLLATE utf_general_ci";
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>