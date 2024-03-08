<?php 
/* Template Name: Home Page Template */ 
get_header(); 
global $post;
$postID = $post->ID;
$image = get_field('image');
$imageUrl = $image['url'];
$snippet = get_field('snippet');
$heading = get_field('heading');
$content = get_field('content');
$link = get_field('link');
$linkUrl = $link['url'];
$linkTitle = $link['title'];
$mission_statement_heading = get_field('mission_statement_heading');
$mission_statement_content = get_field('mission_statement_content');
$feature_block_secondary_image = get_field('feature_block_secondary_image');
$feature_block_secondary_imageUrl = $feature_block_secondary_image['url'];
$feature_block_secondary_snippet = get_field('feature_block_secondary_snippet');
$feature_block_secondary_heading = get_field('feature_block_secondary_heading');
$feature_block_secondary_content = get_field('feature_block_secondary_content');

$success_stories_image = get_field('success_stories_image');
$success_stories_imageUrl = $success_stories_image['url'];
$success_stories_snippet = get_field('success_stories_snippet');
$success_stories_heading = get_field('success_stories_heading');
$success_stories_content = get_field('success_stories_content');
$success_stories_link = get_field('success_stories_link');
$success_stories_linkUrl = $success_stories_link['url'];
$success_stories_linkTitle = $success_stories_link['title'];
$call_to_action_heading = get_field('call_to_action_heading');
$call_to_action_content = get_field('call_to_action_content');
?>

<main role="main">

	<section class="fullWidthFeatureBlock greyBg">
	
		<div class="fullWidthFeatureBlock-content">
		<div class="fullWidthFeatureBlock-content-container">
			<span class="tagline"><?= $snippet?></span>
			<h2><?= $heading?></h2>
			<div class="fullWidthFeatureBlock-content-inner">
			<?= $content?>
			</div>
			<?php if ($link) :?> <a href="<?= $linkUrl?>" class="btn"><?= $linkTitle?></a><?php endif;?>
			</div>
		</div>

		<div class="fullWidthFeatureBlock-image" style="background:url(<?= $imageUrl?>); background-size:cover;"></div>
		
	</section>


	<section class="centralStatement blueBg">
		<div class="l-container">
			<span class="tagline"><?= $mission_statement_heading?></span>
			<?= $mission_statement_content?>
		</div>
	</section>


	<section class="fullWidthFeatureBlock whiteBg reverse">

		<div class="fullWidthFeatureBlock-content">
		<div class="fullWidthFeatureBlock-content-container">
		<span class="tagline"><?= $feature_block_secondary_snippet?></span>
			<h2><?= $feature_block_secondary_heading?></h2>
			<div class="fullWidthFeatureBlock-content-inner">
			<?= $feature_block_secondary_content?>
			</div>
			<?php if ($feature_block_secondary_link) :?> <a href="<?= $feature_block_secondary_linkUrl?>" class="btn"><?= $feature_block_secondary_linkTitle?></a><?php endif;?>
			</div>
		</div>

		<div class="fullWidthFeatureBlock-image" style="background:url(<?= $feature_block_secondary_imageUrl?>); background-size:cover;"></div>

	</section>
	

	<section class="centralFigures">
		<div class="l-container">

		<?php

		// Check rows exists.
		if( have_rows('figures') ):

			// Loop through rows.
			while( have_rows('figures') ) : the_row();

				// Load sub field value.
				$value = get_sub_field('value');
				$description = get_sub_field('description');
				?>
				
				<div class="centralFigures-item">
					<span><?= $value?></span>
					<?= $description?>
				</div>

			<?php // End loop.
			endwhile;

		// No value.
		else :
			// Do something...
		endif;?>
		</div>
	</section>

	<?php
		$sectors = get_field('sectors' );
		if( $sectors ) {
			$first_row = $sectors[0];
			$first_row_title = $first_row['sector_heading'];
			$first_row_summary = $first_row['sector_summary'];
			$first_row_summary_unformatted = strip_tags($first_row_summary);
			$first_row_link = $first_row['sector_link'];
			$first_row_linkUrl = $first_row_link['url'];
			$first_row_linkUrlTitle = $first_row_link['title'];

			$second_row = $sectors[1];
			$second_row_title = $second_row['sector_heading'];
			$second_row_summary = $second_row['sector_summary'];
			$second_row_summary_unformatted = strip_tags($second_row_summary);
			$second_row_link = $second_row['sector_link'];
			$second_row_linkUrl = $second_row_link['url'];
			$second_row_linkUrlTitle = $second_row_link['title'];

			$third_row = $sectors[2];
			$third_row_title = $third_row['sector_heading'];
			$third_row_summary = $third_row['sector_summary'];
			$third_row_summary_unformatted = strip_tags($third_row_summary);
			$third_row_link = $third_row['sector_link'];
			$third_row_linkUrl = $third_row_link['url'];
			$third_row_linkUrlTitle = $third_row_link['title'];

			$fourth_row = $sectors[3];
			$fourth_row_title = $fourth_row['sector_heading'];
			$fourth_row_summary = $fourth_row['sector_summary'];
			$fourth_row_summary_unformatted = strip_tags($fourth_row_summary);
			$fourth_row_link = $fourth_row['sector_link'];
			$fourth_row_linkUrl = $fourth_row_link['url'];
			$fourth_row_linkUrlTitle = $fourth_row_link['title'];
		}
		
	?>

<section class="hoverGraphic leadImage">
		
		<div class="hoverGraphic-panel engineering">
			<h2>Our Services</h2>
			<div class="hoverGraphic-panel-content">
				<h3><?= $first_row_title?></h3>	
				<p style="display:none;"><?= $first_row_summary_unformatted?></p>
				<a href="<?= $first_row_linkUrl?>" class="btn"><?= $first_row_linkUrlTitle?></a>
			</div>
		</div>
		
		<div class="hoverGraphic-panel outsourcing">
			<div class="hoverGraphic-panel-content">
				<h3><?= $second_row_title?></h3>	
				<p style="display:none;"><?= $second_row_summary_unformatted?></p>
				<a href="<?= $second_row_linkUrl?>" class="btn"><?= $second_row_linkUrlTitle?></a>
			</div>
		</div>

		<div class="hoverGraphic-panel strategic">
			<div class="hoverGraphic-panel-content ">
				<h3><?= $third_row_title?></h3>	
				<p style="display:none;"><?= $third_row_summary_unformatted?></p>
				<a href="<?= $third_row_linkUrl?>" class="btn"><?= $third_row_linkUrlTitle?></a>
			</div>
		</div>

		<div class="hoverGraphic-panel india">
			<div class="hoverGraphic-panel-content">
				<h3><?= $fourth_row_title?></h3>	
				<p style="display:none;"><?= $fourth_row_summary_unformatted?></p>
				<a href="<?= $fourth_row_linkUrl?>" class="btn"><?= $fourth_row_linkUrlTitle?></a>
			</div>
		</div>
		
	</section>

	
		

	
	<section class="fullWidthFeatureBlock whiteBg reverse caseStudyBlock">
		
		<div class="fullWidthFeatureBlock-content">
			<div class="fullWidthFeatureBlock-content-container">
				<?php $success_stories = get_field('success_stories', $postID);
				$permalink = get_permalink( $success_stories->ID );
				$introduction = get_field( 'introduction', $success_stories->ID );
				$featuredImage = get_the_post_thumbnail_url( $success_stories->ID );
				$excerpt = get_the_excerpt( $success_stories->ID );
				if( $success_stories ): ?>
					<span class="tagline"><?= $success_stories_snippet?></span>
					<h2><?php echo esc_html( $success_stories->post_title ); ?></h2>
					<div class="fullWidthFeatureBlock-content-inner">
						<?= $excerpt ?>
					</div>
					<?php endif; ?>
					
					<div class="caseStudyButtons">
						<a href="<?= $permalink ?>" class="btn">View Case Study</a> <a href="/success-stories" class="btn">View all case studies</a>
					</div>
				</div>
			</div>

		<div class="fullWidthFeatureBlock-image" style="background:url(<?= $featuredImage?>); background-size:cover;"></div>
	</section>

	<section class="testimonial">
		<div class="l-container">
			<h2>WHAT OUR CLIENTS SAY...</h2>
			<ul class="slides">
			<?php

// Check rows exists.
if( have_rows('testimonials') ):

    // Loop through rows.
    while( have_rows('testimonials') ) : the_row();

        // Load sub field value.
        $quote = get_sub_field('quote');?>
      <li><?= $quote?></li>

    <?php
    endwhile;

// No value.
else :
    // Do something...
endif;?>
				
			</ul>
		
		</div>
	</section>


	<section class="news">
		<div class="l-container">
			<div class="newsHeader">
				<span class="tagline">Insights</span>
				 <h2>Company insights</h2>
			</div>	
		</div>
	<div class="l-container newsContainer">

	<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $category = get_the_category(); ?>

  <div class="news-item" style="background-image:url('<?php the_post_thumbnail_url('full');?>');background-size: cover; ">
  	<div class="news-item-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<a href="<?php the_permalink(); ?>" class="newsLink">Read more </a>
		</div>
	</div>
				



  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>


		

			<div class="allNews" >
				<a href="/insights" class="btn">View all insights</a>
			</div>
	</div>
</section>


	<section class="centralStatement blueBg">
		<div class="l-container">
			<span class="tagline"><?= $call_to_action_heading?></span>
			<?= $call_to_action_content?>
		</div>
	</section>
	
</main>



<?php get_footer(); ?>
