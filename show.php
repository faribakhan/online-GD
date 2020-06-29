<?php 
include 'database.php';
include '_header.php';
$id=$_REQUEST['id'];
$query = "SELECT * from victim where id='".$id."'"; 

	 
			$all_data = mysqli_query($db, "SELECT * from victim where id='".$id."'");
			$select_different = mysqli_fetch_all($all_data, MYSQLI_ASSOC);
		?>
		<?php foreach($select_different as $show): ?>


           
			<div class="container"><div class="col-lg-9 "><div class="col-lg-2"></div><div class="col-lg-7 row  panel panel-success">
		<table class="table success" >
	   <font size="3" face="Arial,Helvetica,Geneva,Swiss,SunSans-Regular"> <div class="box-header with-border">
              <h3 class="box-title">Information</h3>
            </div>
		<tr><td><i class="fa fa-user"> GD NO: <?php echo $show["id"]; ?></br></td></tr>
		<tr><td><i class="fa fa-user"> Name:   <?php echo $show["name"]; ?></br></td></tr>
		<tr><td><i class="fa fa-user"> Fathers Name:   <?php echo $show["fathername"]; ?></br></td></tr>
		<tr><td><i class="fa fa-user"> Mothers Name:   <?php echo $show["mothername"]; ?></br></td></tr>
		<tr><td><i class="fa fa-user"> National Id no:   <?php echo $show["nid"]; ?></br></td></tr>
		<tr><td><i class="fa fa-birthday-cake"> Birthday:   <?php echo $show["birthdate"]; ?></br></td></tr>
		<tr><td><i class="fa fa-envelope-o"></i> Email:  <?php echo $show["email"]; ?></br></td></tr>
		<tr><td><i class="fa fa-phone-square"></i> Phone Number:  <?php echo $show["phone"]; ?></br></td></tr>
		<tr><td><i class="fa fa-phone-square"></i> Alternative Phone Number:  <?php echo $show["valtphone"]; ?></br></td></tr>
		<tr><td><i class="fa fa-user"> Gender:  <?php echo $show["gender"]; ?></br></td></tr>
		<tr><td><i class="fa fa-home"> Zipcode:  <?php echo $show["zipcode"]; ?></br></td></tr>
		<tr><td><i class="fa fa-home"> Present Address:  <?php echo $show["presentaddress"]; ?></br></td></tr>
		<tr><td><i class="fa fa-home"> Permanent Address:  <?php echo $show["permanentaddress"]; ?></br></td></tr>
		<tr><td><i class="fa fa-envelope-o"> Description of Incident:  <?php echo $show["i_description"]; ?></br></td></tr>
		<tr><td><i class="fa fa-calendar"></i> Date of Incident:  <?php echo $show["i_date"]; ?></br></td></tr>
		<tr><td><i class="fa fa-calendar"></i> Time of Incident:  <?php echo $show["i_time"]; ?></td></br></tr>
		<tr><td></td></tr>
		</table>
		</div>
		</div>
		<div class="col-md-3">
		       <div class="panel panel-success">
               <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-12 text-left">
                                <div>
                                    <h3>Related Options</h3></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    <p><a  href="showimage.php?id=<?php echo $show["id"]; ?>">Show Proof image </a></p>
					<p><a href="sendpdf.php?id=<?php echo $show["id"]; ?>">Accept and Send Pdf</a></p>
					<p><a href="deletewithsms.php?id=<?php echo $show["id"]; ?>">Reject</a></p>
                    <p><a href="view.php">Back</a></p>
					<p><a href="index.php">Home</a></p>
                    </div>
              
                  </div>
                </div>
		
		
		</div>
		

		
 <?php endforeach;?>

<?php require "footer.php";?>

	 