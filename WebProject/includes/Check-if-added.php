<?php

function check_if_added_to_cart ($item_id)
{
    $user_id=$_SESSION['user_id'];
    $con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $query1 ="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query1);
    
    if (mysqli_num_rows($result) >= 1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
    
}

?>