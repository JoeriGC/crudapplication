<?php require('session.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="../css/all.css" type="text/css" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />

    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

    <title>index</title>

    </head>

    <?php
    //login confirmation
    confirm_logged_in();

    ?>

<body>

    <div>
        <a href="logout.php" class="logout">Logout&#10162;</a>
        <a href="createuser.php" class="createuser">Create user</a>
    </div>
    <br>
    <br>
    <div>

        <table>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email adress</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Update Delete</th>
            </tr>
            <?php
                require('connect.php');

                $sql = "SELECT `id`, `fName`, `lName`, `email`, `birthdate`, `gender` FROM `users`";
                $result = $conn-> query($sql);
                $id = $row["id"];
                $sqldid = "DELETE FROM MyGuests WHERE id=$id";

                if ($result-> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>'. $row["fName"] .'</td>';
                        echo '<td>'. $row["lName"] .'</td>';
                        echo '<td>'. $row["email"] .'</td>';
                        echo '<td>'. $row["birthdate"] .'</td>';
                        echo '<td>'. $row["gender"] .'</td>';
                        echo '<td width=250>';
                        echo '<a href="update.php?id='.$row['id'].'" class="updel">Update</a>';
                        echo ' ';
                        echo '<a href="delete.php?id='.$row['id'].'&email='.$row['email'].'" class="updel">Delete</a>';
                        echo '</td>';
                        echo '<tr>';
                    }
                    echo "</table>";
                } else {
                    echo "0 result";
                }

                $conn-> close();

            ?>
        </table>

    </div>

</body>

</html>
