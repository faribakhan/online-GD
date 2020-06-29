<?php

require('db.php');

require('fpdf/fpdf.php');


$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","","onlinegd");
$query = "SELECT * from victim where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error($con));
$row = mysqli_fetch_assoc($result);


$count=1; 
$sel_query= "SELECT * from victim where id='".$id."'"; ;
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)){ 

$name=$row["name"]; 
$id=$row["id"]; 
$bday=$row["birthdate"]; 




$pdf = new FPDF();
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
//$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
//$pdf->SetFont('DejaVu','',14);

// Load a UTF-8 string from a file and print it
//$txt = file_get_contents('HelloWorld.txt');
//$pdf->Write(8,$txt);

// Select a standard font (uses windows-1252)
//$pdf->SetFont('Arial','',14);
//$pdf->Ln(10);
//$pdf->Write(5,'The file size of this PDF is only 13 KB.');

//$pdf->Output();




$pdf = new FPDF();

$pdf-> Addpage();
$pdf-> SetFont('Arial','B',9);

$pdf-> Cell(0,10,'Welcome to Chittagong Metropoliton Police',0,1,'C');
$pdf-> SetFont('Arial','',7);

$pdf-> Cell(0,10,"",0,1,'L');$pdf-> Cell(0,10,"",0,1,'L');
$pdf-> Cell(0,10,"Your Gd no is {$id}",0,1,'L');
$pdf-> Cell(0,10,"name {$name} father's name {$row["fathername"]} mother's name {$row["mothername"]}.Your national ID no is {$row["nid"]}",0,1,'L');
$pdf-> Cell(0,10,"Your complaint of : ",0,1,'L');
$pdf-> Cell(0,10,"{$row["i_description"]}  ",0,1,'L');
$pdf-> Cell(0,10,"which took place in {$row["i_date"]} at {$row["i_time"]} is accepted.",0,1,'L');
$pdf-> Cell(0,10,"your mobile number is {$row["phone"]}.",0,1,'L');
$pdf-> Cell(0,10,"your email address is {$row["email"]}.",0,1,'L');
$pdf-> Cell(0,10,"your GD lodging time and date is {$row["entrytime"]}.",0,1,'L');



$pdf->Output();
}

?>





