<?php 
	$coverArt = get_field('cover_art');

	if(empty($coverArt)){
		$coverArt = "https://peprojects.dev/images/square.jpg";
	} else {
		$coverArt = $coverArt["url"];
	}
?>

<div class="video-game-card">
	<?php if($coverArt) { ?>
	<picture class="cover-art" style="background-image:url('<?=$coverArt?>') ">
		<!-- <img src="<?=$coverArt?>" alt="#"> -->
	</picture>
	<?php } ?>
	<h2><?php echo "<p>" . get_the_title() ."</p>"; ?></h2>
	<h4><?php the_field('developer') ?></h4>
	<h4><?php the_field('publisher') ?></h4>
	<a href="<?php the_permalink() ?>"> click here</a>
</div>