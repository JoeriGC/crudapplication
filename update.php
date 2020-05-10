<?php
require('session.php');
require('connect.php');
    //login confirmation
    confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
            <title>Update user</title>
            <link rel="stylesheet" href="../css/all.css" type="text/css" />
    </head>

<body>
    <div>
          <a href="index.php">Go back.</a>
    </div>

    <div>
        <h3>Update user</h3>
    </div>
        <div>
            <?php
            $id = $_GET['id'];
            echo '<form role="form" action="processupdate.php?id='.$id.'" method="post">';
            ?>
                <div style="border-left: 3px solid black;">
                    First name: <input placeholder="First Name" name="firstname" type="text" autofocus required onkeypress="return (event.charCode > 64 &&
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  maxlength="30">
                </div><br>
                <div style="border-left: 3px solid black;">
                    Last name: <input placeholder="Last Name" name="lastname" type="text" autofocus required onkeypress="return (event.charCode > 64 &&
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)"  maxlength="30">
                </div><br>
                <button type="submit" name="btnupdate">Update</button>
            </form>
        </div>

</body>

</html>
    </head>
</html>
