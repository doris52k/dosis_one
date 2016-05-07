<?php include ('single_header.php'); ?>
<div id="main">
	<div id="content">
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<article class="single_article">
				<?php the_content(); ?>
			</article>
		<?php endwhile; else: ?>
			<h2>What?!</h2>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>