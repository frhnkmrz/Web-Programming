<?php

    $con = mysqli_connect("localhost", "root", "", "onlinebooking") or die ("cannot connect to server");

    $idCustomer = $_POST["idCust"];


    $sql_delete = "DELETE FROM customer WHERE idCustomer='$idCustomer'";

    $success = mysqli_query($con,$sql_delete) or die ("Error in inserting data due to" .mysqli_error($con));

    if ($success) {
        echo ("Succesfully Deleted");
    }
    else {
        display_error("Error in deleting data");
    }

    

?>