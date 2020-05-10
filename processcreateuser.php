<?php
require('connect.php');
require('session.php');

//login confirmation
confirm_logged_in();

if (isset($_POST['btnregister'])) {

    // $uName = trim($_POST['username']);
    $fName = trim($_POST['firstname']);
    $lName = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $upass = trim($_POST['password']);
        $h_upass = sha1($upass);
        $h2_upass = sha1($h_upass);
    $bDay = trim($_POST['birthdate']);
    $gender = trim($_POST['gender']);

}

    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //check user
    //  OR `username` = '$username'
    $check="SELECT * FROM `users` WHERE `email` = '$email'";
    $rs = mysqli_query($conn,$check);
    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
    if($data[0] > 1) {
        ?>
        <h2>Email already in use!</h2>
        <a href="index.php">Home</a>!
        <?php
    } else {
        //add user

        $sql = "INSERT INTO `users` (`id`, `fName`, `lName`, `email`, `password`, `birthdate`, `gender`) VALUES (NULL, '$fName', '$lName', '$email', '$h2_upass', '$bDay', '$gender')";

        if(mysqli_query($conn, $sql)){
            echo "<h2>user added successfully.</h2>";
            echo '<a href="index.php">Home</a>';
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            echo '<a href="index.php">Home</a>';
        }

        // Close connection
        mysqli_close($conn);
    }

?>
