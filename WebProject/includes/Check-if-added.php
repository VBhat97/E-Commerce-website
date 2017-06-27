<?php

function check_if_added_to_cart ($item_id)
{
    include 'includes/common.php';
    $query1 ="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $user_query_result = mysqli_query($con, $query1);
    
    if (mysqli_num_rows($user_query_result)>=1)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}