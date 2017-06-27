<?php
require 'includes/common.php';
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
        <?php
        include 'includes/header.php';
        ?>
        <div class='container panelstart'>
            <div class="row">
                <div class="column-xs-6">
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>
                            <h4>Login</h4>
                        </div>
                        <div class='panel-body'>
                            <p>Login to make a purchase</p><br><br>
                            <form class="form-group" method="post" action="Login_Submit.php">
                                <input type="text" placeholder="Email" class="form-control" name="email"><br>
                                <input type="password" placeholder="Password" class="form-control" name="password"><br>
                                <button class="btn btn-primary">Login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't Have an account? Register
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>