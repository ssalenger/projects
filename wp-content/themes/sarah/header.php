<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />



<title>

	<?php if ( is_front_page() ) { ?>Work With Me&nbsp;<?php } ?>
		

	<?php if ( is_search() ) { ?>Search Results: <?php the_search_query(); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

	<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>

	<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

	<?php if ( is_page() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>

	<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>

	<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>

	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>

</title>



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Maiden+Orange&v1' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Amaranth:regular,regularitalic,bold,bolditalic&v1' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Calligraffitti&v1' rel='stylesheet' type='text/css'>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/feed/" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>



<?php wp_head(); ?>

</head>

<body>

<div class="menu-container">

	<div class="menu-container2">
		<ul class="menu">

			<!--<li><a <?php if (is_home()) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>">Home</a></li>-->

			<?php wp_nav_menu( array('menu' => 'Main Nav' )); ?>

			<!--<li><a href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a></li>-->

		</ul>
	</div>
</div>
<div id="header">

	<h5><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h5>

	<h6><?php bloginfo('description'); ?></h6>


</div>