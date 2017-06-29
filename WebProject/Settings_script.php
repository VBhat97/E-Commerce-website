<?php

require 'includes/common.php';

if (!isset($_SESSION['email']))
{
    header("Location: index.php");
}

$oldpass = MD5(MD5($_POST['oldpass']));
$newpass = MD5(MD5($_POST['newpass']));
$repass = MD5(MD5($_POST['repass']));

if($newpass!=$repass)
{
    header("Location: Settings.php");
}

$user_query = "SELECT password from users WHERE password = '$oldpass'";
$user_query_result_here = mysqli_query($con, $user_query);

if(mysqli_num_rows($user_query_result_here)==0)
{
    header("Location: Settings.php");
    echo "Wrong old password";
}
else
{
    $user_query2 = "UPDATE users SET password = '$newpass' WHERE users.password = '$oldpass' ";
    $user_query_result2 = mysqli_query($con, $user_query2);
    header("Location: index.php");
}
