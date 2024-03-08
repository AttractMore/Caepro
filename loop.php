<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="news-item" style="background-image:url('<?php the_post_thumbnail_url('full');?>');background-size: cover; ">
	<div class="news-item-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<a href="<?php the_permalink(); ?>" class="newsLink">Read more </a>
		</div>
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
