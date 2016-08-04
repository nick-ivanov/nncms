<?php
/*
    SM230 - lightweight, secure and easy to use CMS
    Copyright (C) 2016 Nick Ivanov <nnrowan@gmail.com>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require("admin_settings.php");
require("html_skeleton.php");
require("body_skeleton.php");


session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);

        $rows = mysql_num_rows($query);
        if ($username == $admin_username and $password == $admin_password) {
            $_SESSION['login_user']=$username; // Initializing Session
            //header("location: profile.php"); // Redirecting To Other Page
            echo "Welcome! Now go to your <a href='profile.php'>profile</a>.";
        } else {
            $error = "Username or Password is invalid";
        }
    }
}
?>