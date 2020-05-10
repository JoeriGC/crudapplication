<?php
require('connect.php');
require('session.php');

//login confirmation
confirm_logged_in();

    $id = $_GET['id'];

if (isset($_POST['btnupdate'])) {
    $fName = trim($_POST['firstname']);
    $lName = trim($_POST['lastname']);
}

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //check user
        //add user
        $sql = "UPDATE `users` SET `id`='$id',`fName`='$fName',`lName`='$lName' WHERE `id` = '$id';";

        if(mysqli_query($conn, $sql)){
            echo "<h2>user added successfully.</h2>";
            echo '<a href="index.php">Home</a>';
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            echo '<a href="index.php">Home</a>';
        }

        // Close connection
        mysqli_close($conn);

?>
