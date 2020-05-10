<?php
require('session.php');
require('connect.php');
    //login confirmation
    confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
            <title>Create user</title>
            <link rel="stylesheet" href="../css/all.css" type="text/css" />
            <link rel="stylesheet" href="../css/createuser.css" type="text/css" />
    </head>

<body>
    <div>
          <a href="index.php">Go back.</a>
    </div>

    <div>
        <h3>Create user</h3>
    </div>
        <div>
            <form role="form" action="processcreateuser.php" method="post">
                <div style="border-left: 3px solid black;">
                    First name: <input placeholder="First Name" name="firstname" type="text" autofocus required onkeypress="return (event.charCode > 64 &&
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  maxlength="30">
                </div><br>
                <div style="border-left: 3px solid black;">
                    Last name: <input placeholder="Last Name" name="lastname" type="text" autofocus required onkeypress="return (event.charCode > 64 &&
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  maxlength="30">
                </div><br>
                <div style="border-left: 3px solid black;">
                    E-mail: <input placeholder="E-mail" name="email" type="email" autofocus required  maxlength="50">
                </div><br>
                <div style="border-left: 3px solid black;">
                    Password: <input placeholder="Password" name="password" type="password" value="" required  maxlength="50">
                </div><br>
                <div style="border-left: 3px solid black;">
                    Birthdate: <input placeholder="Birthdate" name="birthdate" type="date" autofocus required  maxlength="10">
                </div><br>
                <div style="border-left: 3px solid black;">
                    Gender: <br><input placeholder="male" name="gender" type="radio" autofocus value="male" required>Male <br> <input placeholder="female" name="gender" type="radio" autofocus value="female" required>Female
                </div><br>
                <button type="submit" name="btnregister">Register</button>
            </form>
        </div>

</body>

</html>
    </head>
</html>
