<?php

$con = mysqli_connect("localhost","root","","xm2024") or die("Cannot connect to server");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$country = $_POST['country'];
$email = $_POST['email'];

$sql = "INSERT INTO workshop values ("$first_name","$last_name","$address","$city","$postal","$country","$email")";
$status = mysqli_query($con,$sql) or die ("Error inserting the value".mysqli_error($con));

if($status)(
    echo ("tHE DATA HAS BEEN INSERTED");
)else{
    echo ("Error in insertinf the data");
}
mysqli_close($con);
?>