<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pageControl.js"></script>
<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href='https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
	<div id="container" class="preload">
		<div id="header">
			<div id="head_column" class="top_column">
				<a href="<?php echo home_url(); ?>" class="blogTitle">
					<?php bloginfo('name'); ?>
				</a>
				<div class="categoryButton" id="menubtn_id">
					<div class="categoryButton_bar_one"></div>
					<div class="categoryButton_bar_two"></div>
				</div>
			</div>
			<?php if ( ! dynamic_sidebar("top_menu") ) : ?>
			<?php endif; ?>
		</div>