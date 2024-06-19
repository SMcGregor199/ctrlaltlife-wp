<?php get_header(); ?>
<?php
if (is_page('home')) {
include("templates/pages/home.php");
}

if (is_page('list')) {
	include("templates/pages/games-list.php");
	
}

if(is_singular('video_games')){
	echo "<p>This is the detail page for " . get_the_title()  . "</p>";
}

if(is_404()){
	include("templates/pages/page-not-found.php");
}
?>
<?php get_footer(); ?>

