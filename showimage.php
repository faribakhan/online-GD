<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from victim where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

require_once '_header.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Image</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>View Image</h1>



<?php


$count=1; 
$sel_query= "SELECT * from victim where id='".$id."'"; ;
$result = mysqli_query($con,$sel_query);
while($show = mysqli_fetch_assoc($result)) { ?>



<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
						<a  class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">		
												<?php echo "<img  src='images/".$show['image1']."' >"?>							
											
									</div>
								</div>
								</a>
							
						</div>
						<div class="col-lg-9">
							<a  class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<?php echo "<img  src='images/".$show['image2']."' >"?>				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-9">
							<a class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">				
										<?php echo "<img  src='images/".$show['image3']."' >"?>				
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-9">
							<a class="img-gal">
								<div class="single-imgs relative">		
									<div class="overlay overlay-bg"></div>
									<div class="relative">					
										<?php echo "<img  src='images/".$show['image4']."' >"?>			
									</div>
								</div>
							</a>
						</div>
					
					</div>
				</div>	
			</section>
			<!-- End gallery Area -->
			
			
			
			
			
													

		
	
<?php
}

?>

	<nav id="menu" class="navbar">
        <div class="navbar-header">
            <span id="category" class="visible-xs">Categories</span>
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            	<ul class="nav navbar-nav pull-right">
					<li><a href="view.php">Back</a> </li>
					<li><a href="logout.php">Logout</a></li>
					<li><a href="index.php"><b>Home</b></a></li>
				</ul>

        </div>
    </nav>

<nav class="nav nav-navbar">

</nav>
</body>

