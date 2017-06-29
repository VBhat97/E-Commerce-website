<?php

include 'includes/common.php';
$email = $_POST['email'];
$password = md5(md5($_POST['password']));

$user_registration_query = "SELECT id,email from users WHERE email = '$email' AND password='$password'";
$user_registration_submit = mysqli_query($con, $user_registration_query);

if(mysqli_num_rows($user_registration_submit)==0)
{
    echo "No such username";
    header('Location: Login.php');
}
else
{
    $row = mysqli_fetch_array($user_registration_submit, MYSQLI_ASSOC);
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    header('Location: Products.php');
}
    
?>