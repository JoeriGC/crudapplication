<?php require('session.php');?>
<!DOCTYPE html>
<html lang="en">

    <head>
            <title>Login page</title>
            <link rel="stylesheet" href="../css/all.css" type="text/css" />
            <link rel="stylesheet" href="../css/login.css" type="text/css" />
            <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    </head>


<?php
 if (logged_in()) {
?>
   <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
?>

<body>
    <!--<div>-->
    <!--      <a href="register.php">Don't have an account yet? Register!</a>-->
    <!--</div>-->

    <div>
        <h3 id="logintext">Login</h3>
    </div>
        <div class="logincontainer">
            <form role="form" action="processlogin.php" method="post">
                <div>
                    <p id='emailtext'>E-mail: <input placeholder="E-mail" name="email" type="email" autofocus></p>
                </div>
                <div>
                    <p id='passwordtext'>Password: <input placeholder="Password" name="password" type="password" value=""></p>
                </div>
                <button type="submit" name="btnlogin" id="loginbutton">Login</button>
            </form>
        </div>

</body>

</html>
    </head>
</html>
