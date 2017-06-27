<?php
require 'includes/common.php';
if (isset($_SESSION['id']))
{
    header('Location: Cart.php');
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
        <?php
        include 'header.php';
        ?>
        <div class="container cartfp">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th> </th></tr>
                    <tr><td> </td><td> </td><td> </td><td> </td> </tr>
                    <tr><td> </td><td> </td><td> </td><td><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a> </td> </tr>
                </tbody>
            </table>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>