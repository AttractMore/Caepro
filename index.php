<?php get_header(); 
$postPage = get_option('page_for_posts');
$insights_heading = get_field('insights_heading', $postPage);
$snippet = $insights_heading['snippet'];
$heading = $insights_heading['heading'];
$introductionSnippet = get_field('introduction_snippet', $postPage);
$introductionHeading = get_field('introduction_heading', $postPage);
$introductionContent = get_field('introduction_content', $postPage);
$newsHeader = get_field('insights_header', $postPage);
$newsHeader_snippet = $newsHeader['snippet'];
$newsHeader_heading = $newsHeader['heading'];
?>

	<main role="main">

	<section class="introduction">
    <div class="l-container">
        <span class="tagline"><?= $introductionSnippet?></span>
        <h2><?= $introductionHeading?></h2>
        <div class="introduction-content">
            <?= $introductionContent?>
        </div>
    </div>
</section>
		<!-- section -->
		<section>

		<section class="news">
			<div class="l-container">
			<div class="newsHeader">
				<span class="tagline"><?= $newsHeader_snippet?></span>
				 <h2><?= $newsHeader_heading?></h2>
			</div>
			</div>
			<div class="l-container gridContainer">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
				</div>
		</section>
		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
