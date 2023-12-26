<?php 
    include ('login-data.php');
    $usernameForm = '';
    $passwordForm = '';

    function validateUsername($usernameForm, $username) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['username'])) {
                $usernameForm = $_POST['username'];

                if ($usernameForm == "") {
                    echo "x";
                }

                else if ($usernameForm != $username) {
                    echo "x";
                }

                else if ($usernameForm == $username){
                    echo "/";
                }
            }
        }

        else {
            echo "x";
        }
    }

    function validatePassword($passwordForm, $password) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['password'])) {
                $passwordForm = $_POST['password'];

                if ($passwordForm == "") {
                    echo "x";
                }

                else if ($passwordForm != $password) {
                    echo "x";
                }

                else if ($passwordForm == $password){
                    echo "/";
                }
            }
        }

        else {
            echo "x";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="JS/login.js" defer></script>

    <!--G Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">
</head>
<body>
    <!--Header-->
    <header id="header">
        <h1>Resilience , Creative , Professional</h1>
    </header>

    <!--Blog Login-->
    <section id="login">
        <form method="post" <?php changeLoc($usernameForm, $passwordForm, $username, $password); ?>>
            <fieldset>
                <h1>LOGIN</h1>
                <p>
                    <!-- Username -->
                    <div>
                        <label for="name">Username</label>
                        <br>
                        <input id="name" type="text" name="username" placeholder="Username">

                        <span>
                        <?php
                        validateUsername($usernameForm, $username);
                        ?>
                        </span>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password">Password</label>
                        <br>
                        <input id="password" type="password" name="password">

                        <span>
                        <?php
                        validatePassword($passwordForm, $password);
                        ?>
                        </span>
                    </div>
                </p>
                <p>
                    <button type="submit" name="submitt">Login</button>
                    <button type="button" id="guest">Guest</button>
                </p>
            </fieldset>
        </form>
    </section>

    <!--Navigation SideBar-->
    <nav id="nav">
        <div class="nav">
            <div id="button">
                <p class="button"><a href="index.html">About Me</a></p>
                <br>
                <p class="button"><a href="edu.html">Education & Experiences</a></p>
                <br>
                <p class="button"><a href="login.php">Blog</a></p>
                <br>
                <p class="button"><a href="#footer">Contact</a></p>
            </div>

            <div id="form">
                <form method="post">
                    <fieldset>
                        <h1>Send Your Enquiries Here</h1>
                        <p>
                            <label for="name">Name</label>
                            <input id="name" type="text" value="Your Name" required>
                        </p>
                        <p>
                            <label for="email">Email</label>
                            <input id="email" type="email" required>
                        </p>
                        <p>
                            <textarea>Send Your Enquiries Here</textarea>
                        </p>
                        <p>
                            <button type="submit">Submit</button>
                            <button type="reset">Reset</button>
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
    </nav>

    <!--Footer-->
    <footer id="footer">
        <a href="mailto:adamjeff143@gmail.com" target="_blank">
            <img src="images/email.png" alt="adamjeff143@gmail.com">
        </a>
        <a href="https://api.whatsapp.com/send/?phone=%2B4407831404354&text&type=phone_number&app_absent=0" target="_blank">
            <img src="images/ws.png" alt="+4407831404354">
        </a>
        <a href="https://www.instagram.com/damjep/" target="_blank"> 
            <img src="images/ig.png" alt="My Instagram">
        </a>
    </footer>
</body>
</html>