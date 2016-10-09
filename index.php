<?php
/*
    nnBits CMS: pretty secure CMS
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

/*
  You can use any name for data and settings. If you do not want website
  users browse it (one reason for this could be the desire not to disclose
  unpublished pages and data), just deny access to it in .htaccess.
*/
$data_and_settings_dir = "data_and_settings";

require "$data_and_settings_dir/settings.php";
require "src/get_html_skeleton.php";
require "src/get_body_skeleton.php";
require "src/get_menu.php";
require "src/get_content.php";
require "src/get_footer.php";
require "src/get_header.php";
require "src/get_go.php";
require "src/get_title.php";

/* 
   When a user types, for example, http://example.com?ARGUMENT,
   the argument is scrutinized by the security and page existense
   check. As a result, $go is an adequate and safe response to an
   argument requested in the URL (e.g., existing page ID,
   Error 404 page ID, etc.)
*/ 
$go = get_go($pages, $home_page);

$body = get_body_skeleton(
    get_header($title, $data_and_settings_dir),
    get_menu($pages, $go),
	get_content($go, $data_and_settings_dir, $pages[$go]),
    get_footer($footer_text)
);

echo get_html_skeleton(get_title($pages, $go), "$data_and_settings_dir/style.css", $body);

?>