<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true);
    } else {
        bloginfo('name'); echo ' - '; 
		bloginfo('description');
    }
    ?>">

	<meta name="viewport" content="width=device-width">

	<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Open+Sans:700,300,400italic,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php
		wp_head();
	?>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
</head>
<body <?php body_class($class); ?>>
	<header class="header">
		<h1 class="logo"><a accesskey="1" href="<?php bloginfo('url'); ?>" ><?php bloginfo('name'); ?></a></h1>

		<nav class="header-menu">
			<ul>
				<?php if (function_exists(menusplus())) menusplus(1); ?>
			</ul>
		</nav>
	</header>