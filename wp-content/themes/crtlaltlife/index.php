<?php get_header(); ?>
<?php
if (is_page('home')) {
	$args = ["post_type" => "video_games"];

	$loop = new WP_Query($args);

	while ($loop->have_posts()) : $loop->the_post();
		echo "<p>" . get_the_title() ."</p>"; 
	endwhile;
	wp_reset_postdata();
}

if (is_page('list')) {
	$args = ["post_type" => "video_games"];

	$loop = new WP_Query($args);

	while ($loop->have_posts()) : $loop->the_post();
		include("templates/components/video-game-card.php");
	endwhile;
	wp_reset_postdata();
}

if(is_singular('video_games')){
	echo "<p>This is the detail page for " . get_the_title()  . "</p>";
}
?>
<?php get_footer(); ?>
<!-- Test -->
