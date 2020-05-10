<?php

require('connect.php');
require('session.php');
if (isset($_POST['btnlogin'])) {

    $email = trim($_POST['email']);
    $upass = trim($_POST['password']);
    $h_upass = sha1($upass);
    $h2_upass = sha1($h_upass);

if ($upass == ''){
    ?> <script type="text/javascript">
            alert("Password is missing!");
            window.location = "login.php";
            </script>
    <?php
} else {
    //create sql statement
        $sql = "SELECT * FROM  `users` WHERE  `email` =  '" . $email . "' AND  `password` =  '" . $h2_upass . "'";
        $result = mysqli_query($conn, $sql);

        if ($result){
            //get the number of results based on the sql statement
        $numrows = mysqli_num_rows($result);

        //check the number of results if equal to one
        //if there is a result
        if ($numrows == 1) {
            //store the result to an array and passed to variable found_user
            $found_user = mysqli_fetch_array($result);

            //fill the result to session variable
            $_SESSION['MEMBER_ID'] = $found_user['id'];
            $_SESSION['FIRST_NAME'] = $found_user['fName'];
            $_SESSION['LAST_NAME'] = $found_ser['lName'];

            ?>  <script type="text/javascript">
                //then it will be redirected to index.php
                window.location = "index.php";
                </script>
            <?php

        } else {
            //if there is no result
            ?>  <script type="text/javasctipt">
                alert("Username or Password not registered! Contact your administrator.");
                window.location = index.php;
                </script>
            <?php

            }
        } else {
            die("Table query failed: ");
        }
    }
}

?>
