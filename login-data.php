<?php
$username = 'adamjeff143@gmail.com';
$password = 'abc';
$self = $_SERVER["PHP_SELF"];

function changeLoc($usernameForm, $passwordForm, $username, $password) {
    if(isset($_POST['submitt'])) {
        if (isset($_POST['username']) || isset($_POST['password'])) {
            $usernameForm = $_POST['username'];
            $passwordForm = $_POST['password'];

            if ($usernameForm == "" || $passwordForm == "" || $username == null || $password == null) {
                echo "action='login.php'";
            }

            else if ($usernameForm == $username || $passwordForm == $password) {
            echo '> <script> window.location.href = "blog.php"; </script>';
            }

            else {
                echo "action='login.php'";
            }
        }

        else {
            echo "action='login.php'";
        }
    }

    else {
        echo "action='login.php'";
    }
}

?>