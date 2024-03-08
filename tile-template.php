<?php 

/* Template Name: Tile Template */ 

get_header(); 

?>

<main role="main">

	<section class="introduction">
	    <div class="l-container">
	        <span class="tagline"><?php get_field('introduction_snippet'); ?></span>
	        <h2><?php the_field('introduction_heading'); ?></h2>
	        <div class="introduction-content"><?php the_field('introduction_content'); ?></div>
	    </div>
	</section>

	<?php

		$tile_title = get_field('tile_title');

		$count = count(get_field('tiles'));

		if($count > 4) {
			$count = 4;
		}

		$class = 'row-cols-'.$count;

		if(have_rows('tiles')) :
		
			echo '<section class="hoverGraphic hoverGraphic-new '.$class.'">';

			$i=1; while(have_rows('tiles')) : the_row();

				$link = get_sub_field('link');

				echo '<div id="tile-'.$i.'" class="hoverGraphic-panel hoverGraphic-panel-new" data-img="'.wp_get_attachment_image_src(get_sub_field('image'),'full',false)[0].'">';

				if($i == 1) {
					echo '<h2>'.$tile_title.'</h2>';
				}
				
				echo '<div class="hoverGraphic-panel-content">';
				echo '<h3>'.get_sub_field('title').'</h3>';
				echo '<p style="display:none;">'.strip_tags(get_sub_field('content')).'</p>';
				echo '<a href="'.$link['url'].'" class="btn">'.$link['title'].'</a>';
				echo '</div>';
				echo '</div>';

			$i++; endwhile;

			echo '</section>';

		endif;

	?>

	<section class="enquiryForm">
	    <div class="l-container">
	        <h2><?php echo esc_html__('WANT TO KNOW MORE?','Caepro'); ?></h2>
	        <p><?php echo esc_html__('Please enter your details and a description of your enquiry below and we will be in touch as soon as possible. Thank you for your enquiry.','Caepro'); ?></p>
			<?php echo do_shortcode('[ninja_form id=1]');?>		
		</div>
	</section>

</main>

<?php get_footer(); ?>
