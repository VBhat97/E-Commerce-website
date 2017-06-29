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
    <center>
        <h1 class='signupstart'><b>SIGN UP</b></h1>
        <form class='form-group formwidth' method="post" action="Signup_Script.php">
            <input type='text' placeholder="Name" class='form-control' name="name"><br>
            <input type='text' placeholder="Email" class='form-control' name="email"><br>
            <input type="password" placeholder="Password" class='form-control' name="password"><br>
            <input type='number' placeholder="Contact" class='form-control' name="number"><br>
            <input type='text' placeholder="City" class='form-control' name="city"><br>
            <input type='text' placeholder="Address" class='form-control' name="address"><br>
            <button class="btn btn-primary">Submit</button>
        </form>
    </center>
    <?php
    include 'includes/footer.php';
    ?>
    </body>
</html>