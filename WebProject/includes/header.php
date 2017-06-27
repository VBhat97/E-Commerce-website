        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        Lifestyle Store
                    </a>
                </div>
                <div>
                    <ul class="nav navbar-nav navbar-right">
<?php 
if (isset($_SESSION['email'])){
?>
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
                        ?>
<?php
}
else{
    ?>
<li class="active">
                            <a href="Login.php">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="Signup.php">
                                Sign Up
                            </a>
                        </li>
    <?php
}
?>
                    </ul>
                </div>
            </div>
        </nav>