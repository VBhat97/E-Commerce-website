<?php

require 'includes/common.php';

$user_product_query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";

$user_product_result = mysqli_query($con, $user_product_query);

header("Location: Products.php");

?>