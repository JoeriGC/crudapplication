<?php

//start the first session before storing information in first member

session_start();

//create a new function to check if the session variable member_id is on set
function logged_in() {
    return isset($_SESSION['MEMBER_ID']);
}

//if tsession member is not set then it will be redirected to index.php
function confirm_logged_in() {
    if (!logged_in()) {?>
    <script type="text/javascript">
        window.location = "login.php";
    </script>

    <?php
    }
}


?>
