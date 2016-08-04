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
require("validate.php");

if(array_key_exists("logout", $_GET)) {
    if($_GET["logout"] == "true") {
        //unset($_SESSION['login']);
        session_destroy();
        unset($username);
        echo "<p>You have successfully logged out.</p>";
        echo "<p>Log in again: <a href='admin.php'>here</a></p>";
    }
} else {
    if(array_key_exists("username", $_POST) && array_key_exists("password", $_POST)) {
        $secret_word = 'if i ate spinach';
        if (validate($_POST['username'], $_POST['password'])) {
            $_SESSION['login'] = $_POST['username'] . ',' . md5($_POST['username'] . $secret_word);

            unset($username);
            if(isset($_SESSION['login'])) {
                list($c_username, $cookie_hash) = explode(',', $_SESSION['login']);
                if (md5($c_username . $secret_word) == $cookie_hash) {
                    $username = $c_username;
                    echo "<p>Welcome, $username</p>";
                    echo "<p><a href='admin.php?logout=true'>Logout</a></p>";
                } else {
                    print "You have tampered with your session.";
                }
            }

        } else {
            echo "<p>Incorrect username or password. Try again.</p>";
            echo '<form method ="POST" action ="admin.php">';
            echo 'Username: <input type ="text" name ="username" ><br />';
            echo 'Password: <input type ="password" name ="password" > <br />';
            echo '<input type ="submit" value ="Log In" ></form>';
        }
    } else {
        echo "<p>Enter username and password.</p>";
        echo '<form method ="POST" action =>';
        echo 'Username: <input type ="text" name ="username" ><br />';
        echo 'Password: <input type ="password" name ="password" > <br />';
        echo '<input type ="submit" value ="Log In" ></form>';
    }
}


?>