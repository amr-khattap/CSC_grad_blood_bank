
<?php
//connect database
$servername="localhost";
$username="root";
$password="";
$dbnam="blood_bank";
$con=mysqli_connect($servername,$username,$password,$dbnam);
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>example-aggregate-functions-and-grouping-count-function- php MySQL examples | w3resource</title>
<meta name="description" content="example-aggregate-functions-and-grouping-count-function- php MySQL examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<table class='table table-bordered'>

<tr>
<th> BLOOD GROUB </th>
<th> BLOOD AVilable in stock</th>
</tr>



<!-- print the result of Groub A+-->

<tr>
<th>A+</th>
<th>
<?php

$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='A+'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>




<!-- print the result of Groub B+-->

<tr>
<th>B+</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='B+'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>



<!-- print the result of Groub O+-->

<tr>
<th>O+</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='O+'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>



<!-- print the result of Groub AB+-->

<tr>
<th>AB+</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='AB+'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>



<!-- print the result of Groub A- -->

<tr>
<th>A-</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='A-'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>



<!-- print the result of Groub B- -->

<tr>
<th>B-</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='B-'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>



<!-- print the result of Groub O- -->

<tr>
<th>O-</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='O-'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>\


<!-- print the result of Groub AB-  -->

<tr>
<th>AB-</th>
<th>
<?php


$sql="SELECT count(DONOR_ID) AS total FROM blood_donor where Blood ='AB-'";
$result =mysqli_query($con,$sql);
$values =mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>
</th>
</tr>
</table>
</div>
</div>
</div>
</body>
</html>

