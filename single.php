<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<section class="postMeta">
		<div class="l-container">
			<div class="postMetaCategory">
				<div class="postMetaCategoryTitle">CATEGORY</div>
				<div class="postMetaCategoryName">
				<ul>
				<?php
       $categories = get_the_category();
	   $separator = ' ';
	   $output = '';
	   if ( ! empty( $categories ) ) {
		   foreach( $categories as $category ) {
			   $output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>' . $separator;
		   }
		   echo trim( $output, $separator );
	   }?>
   </ul>
				</div>
			</div>
			<div class="postMetaDate">
				<div class="postMetaCategoryTitle">Date</div>
				<div class="postMetaCategoryName"><?php the_date('dS M Y');?></div>
			</div>
		</div>
	</section>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content();?>


	
		<div class="authorBox">
			<div class="author-image"><?php echo get_avatar( get_the_author_meta( 'ID' ), auto ); ?></div>
			<div class="author-desc">
				<span class="tagline">Author</span>
				<h2><?php echo the_author_meta( 'display_name' ); ?></h2>
				<p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p>
			</div>
			<div class="author-linkedin">
				<a href="<?php the_author_meta('linkedin'); ?>">
					<img src="/wp-content/uploads/2022/12/174857.png" />
				</a>
			</div>
		</div>
	


			
		</article>

		<section class="relatedPosts">
			<div class="l-container"><h2>Related news</h2></div>
				<div class="l-container relatedPostsContainer">
				
				<?php

					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
					setup_postdata($post); ?>
					<div class="news-item" style="background-image:url('<?php the_post_thumbnail_url('full');?>');background-size: cover; ">
							<div class="news-item-content">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
								<a href="<?php the_permalink(); ?>" class="newsLink">Read more </a>
							</div>
						</div>
				<?php }
				wp_reset_postdata(); ?>


				</div>	
			
		</section>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>



<?php get_footer(); ?>
