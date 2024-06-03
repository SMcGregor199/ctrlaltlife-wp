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
		<header>
			<h1>This is the header</h1>
		</header>

		<main>