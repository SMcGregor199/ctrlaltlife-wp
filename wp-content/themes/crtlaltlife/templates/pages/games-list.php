<?php
$args = ["post_type" => "video_games"];

	$loop = new WP_Query($args);

	while ($loop->have_posts()) : $loop->the_post();
		include("templates/components/video-game-card.php");
	endwhile;
	wp_reset_postdata();

	$args = ["post_type" => "game_franchise"];
	$loop = new WP_Query($args);
	while ($loop->have_posts()) : $loop->the_post();
		foreach(get_field('games_in_series') as $gameInSeries){
			if(get_the_title($gameInSeries) == "Sonic Forces"){
				echo "<span>" . get_the_title($gameInSeries) . "</span>";
				echo the_field('description');
			}
		}
	endwhile;
	wp_reset_postdata();