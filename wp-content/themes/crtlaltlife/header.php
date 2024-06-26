<!doctype html> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo wp_get_document_title();?></title>
		<meta name="description" content="A Particular kind of blog">
		<meta property="og:image" content="screenshot.png">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<header class="site-header">
			<inner-column>
			<?php
			include("templates/components/site-menu.php");
			?>
		</inner-column>
		</header>

		<main class="page-content">