<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pageControl.js"></script>
<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href='https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<div id="header">
			<a href="#" onclick="history.back(); return false;" class="singleTitle">
				<span class="backbtn"></span><?php the_title(); ?>
			</a>
			<span class="menubtn"></span>
			<?php if ( ! dynamic_sidebar("top_menu") ) : ?>
			<?php endif; ?>
		</div>