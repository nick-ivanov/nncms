<?php
$title = "My Awesome Website";
$database = "database.db";
$footer_text = "Copyright &copy; 2016 Nick Ivanov [nnrowan@gmail.com]";

$pages = array(
    'home' => 'Home',
    'news' => 'News',
    'about' => 'About'
);

$menu = array(
    array('Home', 'index.php'),
    array('About', 'index.php?about'),
    array('News', 'index.php?news')
);

?>