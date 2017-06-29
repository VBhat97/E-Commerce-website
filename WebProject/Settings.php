<?php
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Lifestyle</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        Lifestyle Store
                    </a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="Cart.php">
                                Cart
                            </a>
                        </li>
                        <li>
                            <a href="Settings.php">
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="Logout.php">
                                Logout
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container settingsfp">
            <center>
                <form class="form-group settingsform" action="Settings_script.php" method="post">
                <h3><b>Change Password</b></h3>
                <input type="text" placeholder="Old Password" class="form-control" name="oldpass"><br>
                <input type="text" placeholder="New Password" class="form-control" name="newpass"><br>
                <input type="text" placeholder="Re-Type New Password" class="form-control" name="repass"><br>
                <button class="btn btn-primary">Change</button>
                </form>
            </center>
        </div>
        <footer>
            <div class='container'>
                <center>
                    Copyright © Lifestyle Store. All Rights Reserved | Contact Us : +91 9000000000
                </center>
            </div>
        </footer>
    </body>
</html>