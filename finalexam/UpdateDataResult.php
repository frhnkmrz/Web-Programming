<html>
    <body>
<?php
$con=mysqli_connect("localhost", "root","","onlinebooking") or die("Cannot connect to server.".mysqli_error($con));

$idCustomer=$_POST["idCust"];
$name=$_POST["name"];
$password=$_POST["password"];
$address=$_POST["address"];

$update_sql="UPDATE customer SET  name = '$name',password ='$password', address = '$address' WHERE idCustomer = '$idCustomer'";

$sql_result=mysqli_query($con,$update_sql);
if($sql_result)
 echo "Succesfully update the data.";
else
 echo "Error in updating the data";
?>

Click <a href = "practice_lab_view.html">here </a>
</body>
</html>