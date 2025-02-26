<?php

    $con = mysqli_connect("localhost","root","","webdb") or die ("Cannot connect to server");

    $name = $_POST['names'];
    $os = $_POST['os'];
    $php = $_POST['php'];
    $web = $_POST['web'];

    $sql = "INSERT INTO students VALUES ('$name','$os','$php','$web')";
    $status = mysqli_query($con,$sql) or die ("Error in inserting data due to ".mysqli_error($con));

    if($status){
        echo ("Your data has been finally inserted into our database");
    }else{
        display_error ("Error when inserting data");
    }
   
?> 

/*update data1*/
<html>
<body>
<?php
$con=mysqli_connect("localhost", "root","","bookonline") or die("Cannot connect to server.".mysqli_error($con));

$idCustomer=$_POST["idCustomer"];

$sql="SELECT * FROM customer WHERE idCustomer='$idCustomer'";

$result=mysql_query($sql) or die("Cannot execute sql.");

$row=mysqli_fetch_array($result,MYSQL_NUM);
?>

<p>Fill the data below to update this customer data </p>
<form method="post" action="update_customer_process.php">

 Id Customer:<input name="idCustomer" type="text" value="<?php echo "$row[0]"; ?>">
 Name:<input name="name" type="text" value="<?php echo "$row[2]"; ?>">
 Password:<input name="password" type="text" value="<?php echo "$row[1]"; ?>">
 Address:<textarea name="address" cols="30"><?php echo "$row[3]"; ?></textarea>
 <p>
 <input name="update2" type="submit" value="Update">
 <input type="reset" name="Submit2" value="Reset">
 </p>
</form>
</body>
</html>

/*update data2*/
<html>
<body>
<?php
$con=mysqli_connect("localhost", "root","","bookonline") or die("Cannot connect to server.".mysqli_error($con));

$idCustomer=$_POST["idCustomer"];
$name=$_POST["name"];
$password=$_POST["password"];
$address=$_POST["address"];

$update_sql="UPDATE customer SET password ='$password', name = '$name', address = '$address' WHERE idCustomer = '$idCustomer'";

$sql_result=mysqli_query($con,$update_sql);

if($sql_result)
 echo "Succesfully update the data.";
else
 echo "Error in updating the data";
?>
</body>
</html>

/*View selected id*/ 
<!doctype html>
<html>
<body>
 <?php
$con=mysqli_connect("localhost", "root", "","bookonline") or die("Cannot connect to server.".mysqli_error($con));

$id=$_POST["id"];

$sql="SELECT * FROM customer WHERE idCustomer='$id'";

$result=mysqli_query($con,$sql) or die("Cannot execute sql.");

$row=mysqli_fetch_array($result,MYSQLI_BOTH);

if($id==$row[0]){
 ?>

<p>Below are customer's information details:</p>
ID Number:<input name="ic" type="text" value="<?php echo "$row[0]";?>"></input>
Password:<input name="pwd" type="text" value="<?php echo "$row[1]";?>"></input>
Customer Name:<input name="name" type="text" value="<?php echo "$row[2]";?>"></input>
Home Address:<textarea name="add" type="text"><?php echo "$row[3]";?>"></textarea>

<?php
}
else
echo "<p>Customer ID is not exist</p>";
?>
</body>
</html>


view data 
<html>
<body>
<?php
 echo "<table border='1'><tr>
 <td>Id Customer</td>
 <td>Name of the Customer</td>
 <td>Address of the Customer</td>
 </tr>";
$con=mysqli_connect("localhost", "root", "","bookonline") or die("Cannot connect to server.".mysqli_error($con));

$sql="SELECT * FROM customer";

 $result=mysqli_query($con,$sql) or die("Cannot execute sql.");

 while($ww=mysqli_fetch_array($result,MYSQL_NUM))
 {
 $idCustomer=$ww[0];
 $name=$ww[2];
 $address=$ww[3];

 echo "<tr>
 <td>$idCustomer</td>
 <td>$name</td>
 <td>$address</td>
 </tr>";
 }
 echo "</table>";
?>
</body>
</html></code>

search data 
<html>
<body>
<?php
 echo "<table border='1'><tr>
 <td>Customer ID</td>
 <td>Customer Name</td>
 <td>Customer Address</td>
 </tr>";
$con=mysqli_connect("localhost", "root", "","bookonline") or die("Cannot connect to server.".mysqli_error($con));

$idCustomer=$_POST["idCustomer"];
$name=$_POST["name"];
$address=$_POST["address"];

$sql="SELECT * FROM customer WHERE idCustomer LIKE '%$idCustomer%' AND name LIKE '%$name%' AND address LIKE '%$address%' ";

$result=mysqli_query($con,$sql) or die("Cannot execute sql.");
while($row=mysqli_fetch_array($result,MYSQL_NUM)){
 $idCustomer=$row[0];
 $name=$row[2];
 $address=$row[3];

 echo "<tr>
 <td>$idCustomer</td>
 <td>$name</td>
 <td>$address</td>
 </tr>";
 }
 echo "</table>";
?>
</body>
</html></data>

delete data
<html>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "bookonline") or die("Cannot connect to server. " . mysqli_connect_error());

$idCustomer = $_POST["idCustomer"];

$sql_delete = "DELETE FROM customer WHERE idCustomer='$idCustomer'";

$sql_result = mysqli_query($con, $sql_delete) or die("Error in SQL due to " . mysqli_error($con));

if ($sql_result) {
    echo "Successfully deleted.";
} else {
    echo "Error in deleting the data.";
}

mysqli_close($con);
?>
</body>
</html>

<?php

$con = mysqli_connect("localhost","root","","xm2024") or die ("Cannot connect to server");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$country = $_POST['country'];
$email = $_POST['email'];

$sql = "INSERT INTO workshop values ('$first_name','$last_name','$address ','$city','$postal','$country','$email')";
$status = mysqli_query($con,$sql) or die ("Error in inserting data".mysqli_error($con));

if ($status){
    echo "The data has been inserted";
}else{
    echo "Error";
}

?>