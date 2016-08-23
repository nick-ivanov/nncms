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

require "ds_v0/settings.php";
require "src/get_html_skeleton.php";
require "src/get_body_skeleton.php";
require "src/get_menu.php";
require "src/get_content.php";
require "src/get_footer.php";
require "src/get_header.php";
require "src/get_go.php";
require "src/get_title.php";

$go = get_go($pages);

$body = get_body_skeleton($go, get_header($title), get_menu($menu),
	get_content($go), get_footer($footer_text));

echo get_html_skeleton(get_title($pages, $go), "ds_v0/style.css", $body);

?>