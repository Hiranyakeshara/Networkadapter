<?php

// Create connection

    $con = new mysqli("sql105.infinityfree.com", "if0_34536786", "", "if0_34536786_bridgelink");

// Check connection

    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    } else {
        echo "<script>console.log('Database Connect Successful')</script>";
    }
    
?>
