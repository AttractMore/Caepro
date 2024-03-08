<?php 
/* Template Name: Service Internal Page Template */ 
get_header(); 

$introductionSnippet = get_field('introduction_snippet');
$introductionHeading = get_field('introduction_heading');
$introductionContent = get_field('introduction_content');
$image = get_field('image');
$imageUrl = $image['url'];
$snippet = get_field('snippet');
$heading = get_field('heading');
$content = get_field('content');
$statement_block_heading = get_field('statement_block_heading');
$statement_block_content = get_field('statement_block_content'); 
$people = get_field('people');
$people_snippet = $people['snippet'];
$people_heading = $people['heading'];

$feature_block_secondary_snippet = get_field('feature_block_secondary_snippet');
$feature_block_secondary_heading = get_field('feature_block_secondary_heading');
$feature_block_secondary_content = get_field('feature_block_secondary_content');
$feature_block_secondary_image = get_field('feature_block_secondary_image');
$feature_block_secondary_imageUrl = $feature_block_secondary_image['url'];

$content_block = get_field('content_block');
$content_block_snippet = $content_block['snippet'];
$content_block_heading = $content_block['heading'];
$content_block_content = $content_block['content'];

$download_guide = get_field('download_guide');
$download_guide_link = $download_guide['link']['url'];
$download_guide_linkTitle = $download_guide['link']['title'];
$download_guide_heading = $download_guide['heading'];
$download_guide_content = $download_guide['content'];

$relatedPosts = get_field('related_success_stories');

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

<section class="fullWidthFeatureBlock whiteBg">

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

    <section class="testimonial orangeBg">
		<div class="l-container">
			<span class="tagline"><?= $statement_block_heading?></span>
			<?= $statement_block_content?>
		</div>
	</section>


<section class="whiteBg textBlock">
    <div class="l-container">
        <span class="tagline"><?= $content_block_snippet?></span>
        <h2><?= $content_block_heading?></h2>
        <div class="textBlock-content">
          <?= $content_block_content?>
        </div>
    </div>
</section>

<section class="downloadBrochure">
    <div class="l-container">
        <h2><?= $download_guide_heading?></h2>
        <?= $download_guide_content?>
        <a href="<?= $download_guide_link?>" class="btn"><?= $download_guide_linkTitle?></a>
    </div>
</section>


<section class="relatedSuccessStories">
<div class="l-container"><h2>Related success stories</h2></div>
<div class="l-container relatedSuccessStoriesContainer">
    <?php
    $related_success_stories = get_field('related_success_stories');
    if( $related_success_stories ): ?>


        <?php foreach( $related_success_stories as $relatedSuccess ): 
            $permalink = get_permalink( $relatedSuccess->ID );
            $title = get_the_title( $relatedSuccess->ID );
            $featuredImage = get_the_post_thumbnail_url( $relatedSuccess->ID );
            ?>
        <div class="news-item" style="background-image:url('<?= $featuredImage?>');background-size: cover; ">
            <div class="news-item-content">
                <h3><a href="<?= $permalink?>"><?= $title ?></a></h3>
                <a href="<?= $permalink?>" class="newsLink">Read more </a>
            </div>
        </div>
        <?php endforeach; ?>
    
<?php endif; ?>
        <div class="allNews"><a href="/success-stories" class="btn">View all</a></div>
    </div>
    </section>

<section class="enquiryForm">
    <div class="l-container">
        <h2>WANT TO KNOW MORE?</h2>
        <p>Please enter your details and a description of your enquiry below and we will be in touch as soon as possible. Thank you for your enquiry.</p>
		<?php echo do_shortcode('[ninja_form id=1]');?>		
	</div>
</section>

    
	
</main>



<?php get_footer(); ?>
