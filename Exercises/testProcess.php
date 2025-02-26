<!DOCTYPE html>
<html>
<body>

<?php

    $con = mysqli_connect("localhost","root","","webdb") or die ("Cannot connect to server");

    $name = $_POST['names'];
    $os = $_POST['os'];
    $php = $_POST['php'];
    $web = $_POST['web'];

    echo "Your name is : $name";
    echo "<br>";
    echo "Operating system you use is : $os";
    echo "<br>";
    echo "Learn php before?: $php";
    echo "<br>";
    echo "Your favorite web is : $web";
    echo "<br>";

    $sql = "insert into students VALUES ('$name','$os','$php','$web')";
    $status = mysqli_query($con,$sql) or die ("Error in inserting data due to ".mysqli_error($con));
?>

</body>
</html>
