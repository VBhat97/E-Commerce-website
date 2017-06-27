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
        include 'includes/Check-if-added.php';
        ?>
        <div class="container">
            <div class="jumbotron productsfl">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera1.jpg" alt="Camera1" />
                        <div class="caption">
                            <h3>Nikon D5</h3>
                            <p>Price: Rs. 410000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(1)) { 
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="https://goo.gl/8Us2fa" alt="Camera2" />
                        <div class="caption">
                            <h3>Cannon EOS 1DX</h3>
                            <p>Price: Rs. 455000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(2)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera3.jpg" alt="Camera3" />
                        <div class="caption">
                            <h3>Cannon EOS 5D</h3>
                            <p>Price: Rs. 306000.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(3)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/camera4.jpg" alt="Camera4" />
                        <div class="caption">
                            <h3>Nikon D810</h3>
                            <p>Price: Rs. 168000.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(4)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch1.jpg" alt="Watch1" />
                        <div class="caption">
                            <h3>Titan Octane</h3>
                            <p>Price: Rs. 8770.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(5)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch2.jpg" alt="Watch2" />
                        <div class="caption">
                            <h3>Maxim Model #311</h3>
                            <p>Price: Rs. 6770.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(6)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch3.jpg" alt="Watch1" />
                        <div class="caption">
                            <h3>Fasttrack Model #20</h3>
                            <p>Price: Rs. 6300.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(7)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/watch4.jpg" alt="Watch4" />
                        <div class="caption">
                            <h3>UBC</h3>
                            <p>Price: Rs. 3200.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(8)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt1.jpg" alt="shirt1" />
                        <div class="caption">
                            <h3>US Polo</h3>
                            <p>Price: Rs. 1670.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(9)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt2.jpg" alt="shirt2" />
                        <div class="caption">
                            <h3>Levis</h3>
                            <p>Price: Rs. 1870.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(10)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt3.jpg" alt="shirt3" />
                        <div class="caption">
                            <h3>Jack & Jones</h3>
                            <p>Price: Rs. 1940.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(11)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/shirt4.jpg" alt="shirt4" />
                        <div class="caption">
                            <h3>John Players</h3>
                            <p>Price: Rs. 1740.00</p>
                                                        <?php if (!isset($_SESSION['email'])) { ?>
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy
Now</a></p>
<?php
} else {
if (check_if_added_to_cart(12)) {
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to
cart</a>';
} else {
?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block
btn-primary">Add to cart</a>
<?php
}
}
?>
                        </div>
                    </div>
            </div>
        </div>
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