<?php
 echo "<table border='1'><tr>
 <td>Customer ID</td>
 <td>Customer Name</td>
 <td>Customer Address</td>
 <td>Delete Data</td>
 <td>Update Data</td>
 </tr>";

$con=mysqli_connect("localhost", "root", "","onlinebooking") or die("Cannot connect to
server.".mysqli_error($con));

$name=$row[0];
$email=$row[1];
$phone=$row[3];
$car=$row[4];
$plate=$row[5];
$category=$row[6];

 $sql_search="SELECT * FROM customer WHERE idCustomer LIKE '%$idCustomer%'
 AND name LIKE '%$name%' AND address LIKE '%$address%' ";

 $result=mysqli_query($con,$sql_search) or die("Cannot execute sql".mysqli_error($con));
 while($row=mysqli_fetch_array($result))
 {
 $idCustomer=$row[0];
 $name=$row[1];
 $address=$row[3];

 echo "<tr>
 <td>$idCustomer</td>
 <td>$name</td>
 <td>$address</td>
 
 </tr>";
 }
 echo "</table>";
?> 
