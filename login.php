<?php
session_start();

$username = 'admin';
$password = 'password';

if($_POST['username'] == $username && $_POST['pass']==$password)

{
    //generate session id and csrf token
    $session_id = uniqid();
    $csrf_token = uniqid() . $session_id;



    //set sessionid and csrf
    setcookie('session_id', $session_id, time() + (86400 * 30), "/");
    setcookie('username', $username, time() + (86400 * 30), "/");
    setcookie('csrf_token', $csrf_token, time() + (86400 * 30),"/");

    header("location: home.php");


}else
{
    echo "<script>alert('Check username and password');</script>";

}
