<?php

require_once '_header.php';


require('database.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="table table-responsive">
<p><a href="index.php">Home</a> 
|
<p>New Register Add <a href='registration.php'>Register Here</a></p>

| <a href="logout.php">Logout</a></p>
<h2>View  Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;" class="table table-hover table-bordered progress-table-wrap progress-table">
<thead class="thead-secondary">
<tr>
<th><strong><h5 align="center"><font size="3" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">S.No</font></h5></strong></th>
<th><strong><h5 align="center"><font size="3" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Victim Name</font></h5></strong></th>
<th><strong><h5 align="center"><font size="3" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">View Data</font></h5></strong></th>
<th><strong><h5 align="center"><font size="3" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular">Delete Data</font></h5></strong></th>

</tr>
</thead>
<tbody>
<?php

$count=1;
$sel_query="Select * from victim ORDER BY entrytime desc ;";
$result = mysqli_query($db,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>

<td align="center">
<a href="show.php?id=<?php echo $row["id"]; ?>">View</a>
</td>

<td align="center">
<a href="deletewithsms.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
 
</body>
</html>