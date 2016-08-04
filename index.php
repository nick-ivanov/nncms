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

require "settings.php";
require "html_skeleton.php";
require "body_skeleton.php";
require "menu.php";
require "content.php";
require "footer.php";
require "header.php";

$body = get_body_skeleton(get_header("header"), get_menu($database),
	get_content($database), get_footer("footer"));

echo get_html_skeleton($title, "style.css", $body);

?>