<?php

    $con = mysqli_connect("localhost", "root", "", "onlinebooking") or die ("cannot connect to server");

    $idCustomer = $_POST["idCust"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $address = $_POST["address"];

    $sql = "INSERT into customer VALUES ('$idCustomer', '$name', '$password', '$address')";

    $success = mysqli_query($con,$sql) or die ("Error in inserting data due to" .mysqli_error($con));

    if ($success) {
        echo ("Data inserted succesfully.");
    }
    else {
        display_error("Failed to insert new data");
    }

    

?>