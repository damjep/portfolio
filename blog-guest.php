<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/blog.css">

    <!--G Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne&display=swap" rel="stylesheet">

    <style>
        div#postEntry {
            width: 700px;
            height: 30px;
            margin: 5px;
            padding: 5px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <!--Header-->
    <header id="header">
        <h1>Resilience , Creative , Professional</h1>
    </header>

    <!-- Blog -->
    <div id="blog-guest">
        <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "test";

        $db = new mysqli($servername, $username, $password, $dbname);
        $sqlContent = "SELECT DISTINCT * FROM blogentry";
        $result = $db->query($sqlContent);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div id=\"postEntry\">";
                echo "<h2>$column[Title]</h2>";
                echo "<p>$column[Content]</p>";
                echo "</div>";
                echo "<br>";
            }
        }
        ?>
        <p></p>
    </div>

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