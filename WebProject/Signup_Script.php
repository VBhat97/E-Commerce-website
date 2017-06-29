<?php

require 'includes/common.php';
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$city =$_POST['city'];
$address = $_POST['address'];
$password = (md5(md5($_POST['password'])));

$user_select_query = "SELECT * FROM users WHERE email = '$email'";
$user_query_result = mysqli_query($con, $user_select_query);

if(mysqli_num_rows($user_query_result)>0)
{
    header('Location: Signup.php');
}

else
{
    $user_select_query = "INSERT INTO users (id, name, email, password, contact, city, address) VALUES (NULL, '$name', '$email', '$password', '$number', '$city', '$address')";
    $user_query_result = mysqli_query($con, $user_select_query);
    $_SESSION['id'] = mysqli_insert_id($con);
    header('Location: Products.php');
}
