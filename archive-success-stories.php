<?php get_header();
$introductionSnippet = get_field('introduction_snippet', 'options');
$introductionHeading = get_field('introduction_heading', 'options');
$introductionContent = get_field('introduction_content', 'options');
$newsHeader = get_field('news_header', 'options');
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
        <div class="l-container gridContainer" >
            <?php get_template_part('loop-success-stories'); ?>
            <?php get_template_part('pagination'); ?>
        </div>
    </section>
</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
