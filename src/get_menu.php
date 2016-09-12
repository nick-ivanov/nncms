<?php
/*
    SM230: pretty secure CMS
    Copyright (C) 2016 Nick Ivanov <nick@nnbits.org>

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

function get_menu($pages, $go)
{
    $bob = "";
    foreach(array_keys($pages) as $item) {
        $item_span_class = "menu_item";

        if($item == $go) {
            $item_span_class = "current_menu_item";
        }

        if($pages[$item][0] == '@') {
            $pagetitle = substr($pages[$item], 1, strlen($pages[$item])-1);
            $bob = $bob . "<span class='$item_span_class'>" .
                "<a href='index.php?$item'>$pagetitle</a></span>&nbsp;&nbsp;&nbsp;";
        }
    }

	return $bob;
}

?>