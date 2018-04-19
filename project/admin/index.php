<?php
require_once('function/function.php');
needLogged();
require_once('../config.php');
get_header();
get_sidebar();
get_bread();
get_part('home.php');

get_footer();

?>
