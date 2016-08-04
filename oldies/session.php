<?php
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
$login_session =$row['username'];
if(!isset($login_session)){
    echo "Hi! <a href=";

    header('Location: index.php'); // Redirecting To Home Page
}
?>