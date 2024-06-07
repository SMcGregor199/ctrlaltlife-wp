<div class="video-game-card">
	<h2><?php echo "<p>" . get_the_title() ."</p>"; ?></h2>
	<h4><?php the_field('developer') ?></h4>
	<h4><?php the_field('publisher') ?></h4>
	<a href="<?php the_permalink() ?>"> click here</a>
</div>