<?php
require('connect.php');
require('session.php');

//login confirmation
confirm_logged_in();

    $id = $_GET['id'];

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //check user
        //add user
        $sql = "DELETE FROM `users` WHERE `id` = '$id';";

        if(mysqli_query($conn, $sql)){
            echo "<h2>user deleted</h2>";
            echo '<a href="index.php">Home</a>';
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            echo '<a href="index.php">Home</a>';
        }

        // Close connection
        mysqli_close($conn);

?>
