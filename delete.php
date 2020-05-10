<?php
require('session.php');
require('connect.php');
    //login confirmation
    confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
            <title>Delete user</title>
            <link rel="stylesheet" href="../css/all.css" type="text/css" />
    </head>

<body>
    <div>
          <a href="index.php">Go back.</a>
    </div>

    <div>
        <h3>Delete user</h3>
    </div>
        <div>
            <?php
            $id = $_GET['id'];
            $user = $_GET['email'];
            echo '<form role="form" action="processdelete.php?id='.$id.'" method="post">';
            echo '<h3>Are you sure you want to delete user: '; echo $user; echo' ?</h3>';
            ?>
                <button type="submit" name="btndelete">Delete</button>
            </form>
        </div>

</body>

</html>
    </head>
</html>
