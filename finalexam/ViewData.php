<html>
    <body>
<?php

 echo "<table border='1'><tr>
 <td>Id Customer</td>
 <td>Name of the Customer</td>
 <td>Address of the Customer</td>
 </tr>";


$con=mysqli_connect("localhost", "root", "","onlinebooking") or die("Cannot connect to
server.".mysqli_error($con));

 $sql="SELECT * FROM customer";

 $result=mysqli_query($con,$sql) or die("Cannot execute sql.");

 while($ww=mysqli_fetch_array($result,MYSQLI_NUM))
 {
 $idCustomer=$ww[0];
 $name=$ww[1];
 $address=$ww[3];

 echo "<tr>
 <td>$idCustomer</td>
 <td>$name</td>
 <td>$address</td>
 </tr>";
 }

 
echo "</table>";

?> 
Return to<a href = "PracticeLabMenu.html"> Main Menu</a>
</body>
</html>