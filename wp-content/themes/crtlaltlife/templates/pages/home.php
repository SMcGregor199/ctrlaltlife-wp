
<section class="page-section">
	
<?php 
	

	$args = ["post_type" => "video_games"];

	$loop = new WP_Query($args);

	while ($loop->have_posts()) : $loop->the_post();
		echo "<p>" . get_the_title() ."</p>"; 
	endwhile;
	wp_reset_postdata();
?>
	
</section>