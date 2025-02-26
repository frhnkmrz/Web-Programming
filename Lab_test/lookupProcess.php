<html>
    <body>
    <?php

    $con = mysqli_connect("localhost","root","","Lab_Test_1a");
    
    if (!$con) { die("Connection failed: " . mysqli_connect_error());
    }

    
    if (isset($_POST["id_student"]) && !empty($_POST["id_student"])) {
    $id = $_POST["id_student"];

    $sql = "SELECT * from student WHERE id = '$id'";

    $result=mysqli_query($con,$sql);

    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    ?>
    <p>Students Details</p>

    ID Number:<input name=id_students type=text value="<?php echo "$row[0]"?>";></input><br>
    Name:<input name=name type=text value="<?php echo "$row[1]"?>";></input><br>
    Semester:<input name=semester type=text value="<?php echo "$row[2]"?>";></input><br>
    College:<input name=college type=text value="<?php echo "$row[3]"?>";></input>

    <?php
    }else{
    echo "<p><h1>Student ID is NOT VALID</h1></p>";
    }
}
    mysqli_close($con);
    
    ?>
    </body>
    </html>