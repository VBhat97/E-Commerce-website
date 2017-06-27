<?php

include 'includes/common.php';
$email = mysqli_real_escape_string($_POST['email']);
$password = mysqli_real_escape_string(md5(md5($_POST['password'])));

$user_registration_query = "SELECT id from users WHERE email = '$email' AND password = '$password' ";
$user_registration_submit = mysqli_query($con, $user_registration_query);

if(mysqli_num_rows($user_registration_submit)==0)
{
    echo "No such username";
    header('Location: Login.php');
}
else
{
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $mysqli_user_id($con);
    header('Location: Products.php');
}
    
?>