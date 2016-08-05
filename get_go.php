<?php
/*
    SM230: pretty secure CMS
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

// This simple function provides a compelling protection
function get_go($pages_ng) {
    if(count($_GET) == 0) {
        return 'home';
    }

    foreach(array_keys($pages_ng) as $go) {
        if(isset($_GET[$go])) {
            return $go;
        }
    }

    return 'p404';
}


?>