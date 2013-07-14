<!DOCTYPE html>
<!--[if IE 6 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>

<!-- Basic Page Needs 
========================================================= -->
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title(' - ', true, 'left'); ?></title>

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php global $options_data; ?>

<!-- Mobile Specific Metas & Favicons
========================================================= -->
<?php if ( $options_data['check_mobilezoom'] == 1 ) { ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<?php } ?>

<link rel="shortcut icon" href="<?php if ( !empty($options_data['media_favicon']) ) { echo $options_data['media_favicon']; } else { echo get_template_directory_uri().'/favicon.ico'; } ?>">

<!-- WordPress Stuff
========================================================= -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php get_template_part('framework/inc/googlefonts'); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="main" class="<?php echo $options_data['select_layoutstyle'];?>">
	<?php 
	if ( isset($options_data['header_layout']) ) {
		$header_version = $options_data['header_layout'];
	} else {
		$header_version = 'version1';
	}
	get_template_part('framework/headers/header-'.$header_version); ?>