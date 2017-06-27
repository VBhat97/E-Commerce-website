<?php

require 'includes/common.php';
$name = mysqli_real_escape_string($_POST['name']);
$email = mysqli_real_escape_string($_POST['email']);
$number = mysqli_real_escape_string($_POST['number']);
$city = mysqli_real_escape_string($_POST['city']);
$address = mysqli_real_escape_string($_POST['address']);
$password = mysqli_real_escape_string(md5(md5($_POST['name'])));

$user_select_query = "SELECT * FROM users WHERE email = '$email";
$user_query_result = mysqli_query($con, $user_select_query);

if(mysqli_num_rows($user_query_result)>0)
{
    echo "User already exists";
    header('Location: Singup.php');
}

else
{
    $user_select_query = "INSERT INTO (name, email, password, contact, city, address) VALUES ($name, $email, $password, $contact, $city, $address)";
    $user_query_result = mysqli_query($con, $user_select_query);
    $_SESSION['id'] = mysqli_insert_id($con);
    header('Location: Products.php');
}
