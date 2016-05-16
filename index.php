<?php get_header(); ?>
<div id="main">
	<div id="index_content" >
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<article class="index_article">
				<a href="<?php the_permalink(); ?>">
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
					<div style="background-image: url('<?php echo $thumb['0']; ?>')" class="index_article_thumb" ></div>
				</a>
				<a href="<?php the_permalink(); ?>" class="index_title">
					<?php the_title(); ?>
				</a>
				<span class="index_info">
					<?php the_category('&nbsp;&nbsp;&nbsp;&nbsp;∙&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
				</span>
			</article>
		<?php endwhile; else: ?>
			<h2>What?!</h2>
		<?php endif; ?>
		<div class="more_article"></div>
	</div>
</div>
<?php get_footer(); ?>