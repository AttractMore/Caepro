<?php get_header(); 
$objective = get_field('objective');
$introduction = get_field('introduction'); 
?>

	<main role="main">
	<!-- section -->
	<section class="successStory">

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
                    // if ( ! empty( $categories ) ) {
                    //     foreach( $categories as $category ) {
                    //         $output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>' . $separator;
                    //     }
                    //     echo trim( $output, $separator );
                    // }
					$output = '';
                    if ( ! empty( $categories ) ) {
                        foreach( $categories as $category ) {
                            $output .= '<li>' . esc_html( $category->name ) . '</li>' . $separator;
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

            <div class="postMetaObjective">
				<div class="postMetaCategoryTitle">Objective</div>
				<div class="postMetaObjectiveContent"><?= $objective?></div>
			</div>
		</div>
	</section>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		

		<?= $introduction ?>

		
        
			
		</article>

		<section class="relatedPosts">
		<div class="l-container"><h2>Related success stories</h2></div>
			<div class="l-container" style="justify-content:inherit;">
			
			<?php
global $post;

$current_post_type = get_post_type( $post );

$args = array(
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'ID',
    'post_type' => $current_post_type,
    'post__not_in' => array( $post->ID )
);

// Create the related query
$rel_query = new WP_Query( $args );

// Check if there is any related posts
if( $rel_query->have_posts() ) : 
?>

<?php
    // The Loop
    while ( $rel_query->have_posts() ) :
        $rel_query->the_post();
?>

<div class="news-item" style="background-image:url('<?php the_post_thumbnail_url('full');?>');background-size: cover;margin-right:15px; ">
        <div class="news-item-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<a href="<?php the_permalink(); ?>" class="newsLink">Read more </a>
		</div>
	</div>
    <?php endwhile;
?>
   
</div><!-- #related -->
<?php
endif;

// Reset the query
wp_reset_query();

?>
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
