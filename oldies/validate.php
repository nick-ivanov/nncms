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

function validate($user, $pass)
{
    /* replace with appropriate username and password checking, such as checking a database */
    $users = array('admin' => 'password', 'adam' => '8HEj838');
    if (isset($users[$user]) && ($users[$user] === $pass))
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>