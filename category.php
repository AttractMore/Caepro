<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		

		<section class="news">
			<div class="l-container">
			<div class="newsHeader">
				<span class="tagline"><?= $snippet?></span>
				 <h2><?= $heading?></h2>
			</div>
			</div>
			<div class="l-container" style="padding-left:60px; justify-content: flex-start;">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
				</div>
		<section>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
