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
        include 'includes/header.php' ;
        ?>
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <p class='contentpara'>Shop at India's leading store and also avail special discounts!</p>
                    <a class="btn btn-danger btn-lg active shopnow" href="Products.php">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php' ;
        ?>
    </body>
</html>