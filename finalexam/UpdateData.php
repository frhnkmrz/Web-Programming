<?php

$con=mysqli_connect("localhost", "root","","onlinebooking") or die("Cannot connect to
server.".mysqli_error($con));

$idCustomer=$_POST["idCust"];
$sql_update="SELECT * FROM customer WHERE idCustomer='$idCustomer'";

$result=mysqli_query($con,$sql_update) or die("Cannot execute sql.");

$row=mysqli_fetch_array($result);

?>

<p>Fill the data below to update this customer data </p>

<form name="form1" method="post" action="UpdateDataResult.php">
<table width="513" border="1">
    <tr>
 <th scope="row">ID Customer</th>
 <td><input name="idCust" type="text" value="<?php echo"$row[0]"; ?>">
</td>
</tr>
<tr>
<th scope="row">Name</th>
 <td><input name="name" type="text" id="name" value="<?php echo"$row[1]"; ?>">
</td>
<tr>
<th scope="row">Password</th>
 <td><input name="password" type="text" id="password" value="<?php echo"$row[2]"; ?>">
</td>
</tr>
<th scope="row">Address</th>
 <td><textarea name="address" cols="50" id="address"><?php echo"$row[3]"; ?>
</textarea>
</td>
</tr>
<hr>
</table>
 <p>
   
 <input name="update2" type="submit" id="update2" value="Update">
 <input type="reset" name="Submit2" value="Reset">

 </p>
 </form>
