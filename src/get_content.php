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

function get_content($go, $data_and_settings_dir, $page_header)
{
    if($page_header[0] == '@') {
        $page_header = substr($page_header, 1, strlen($page_header)-1);
    }

	$output = "<hr />\n<h1>$page_header</h1>\n";
	$output .= file_get_contents("$data_and_settings_dir/pages/$go.html") . "\n<hr />";
	return $output;
}

?>