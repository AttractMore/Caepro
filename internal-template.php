<?php 
/* Template Name: Internal Page Template */ 
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

$feature_block_secondary_link = get_field('feature_block_secondary_link');
$feature_block_secondary_linkUrl = $feature_block_secondary_link['url'];
$feature_block_secondary_linkTitle = $feature_block_secondary_link['title']
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
		</div>
			<?php if ($link) :?> <a href="<?= $linkUrl?>" class="btn"><?= $linkTitle?></a><?php endif;?>
		</div>

		<div class="fullWidthFeatureBlock-image" style="background:url(<?= $imageUrl?>); background-size:cover;"></div>

	</section>

    <section class="centralStatement orangeBg" style="padding:120px 0 115px 0;">
		<div class="l-container">
			<span class="tagline"><?= $statement_block_heading?></span>
			<?= $statement_block_content?>
		</div>
	</section>

<?php if( is_page( 'about-us' ) ) :?>
    <section class="teamBios">
<div class="l-container">
<section class="teamBios-container">
	
		<div class="teamBios-intro">	
			<span class="tagline"><?= $people_snippet?></span>
			<h2><?= $people_heading?></h2>
		</div>
	

</section>

<div class="teamMemberContainer">

<?php
$i=0;
if ( have_rows( 'people' ) ) : ?>

	<?php while ( have_rows( 'people' ) ) : the_row();
// Check rows exists.
if( have_rows('team') ):

    // Loop through rows.
    while( have_rows('team') ) : the_row();

        // Load sub field value.
        $name = get_sub_field('name');
		$headshot = get_sub_field('headshot');
		$headshotImg = $headshot['url'];
		$headshotAlt = $headshot['alt'];
		$position = get_sub_field('position');
		$bio = get_sub_field('bio');
		$i++
        ?>

  

<div class="teamMember">
					<img src="<?= $headshotImg?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="<?= $headshotAlt?>">		

					<div class="teamMember-content">
						<div><h2><?= $name?></h2>
						<span><?= $position?></span></div>
						<button type="button" data-fancybox="" data-src="#modal-<?= $i?>" data-touch="true">i</button>
						
					</div>

					<div style="display: none;" id="modal-<?= $i?>" class="">
					<div class="modal-internal">

								<div class="modal-media">
									<img class="modal-image" src="<?= $headshotImg?>" alt="<?= $headshotAlt?>">
									<div class="modal-socials">
																												</div>
								</div>

								<div class="modal-content">
									<div class="modal-content-inner">
										<h2><?= $name?></h2>
										<p class="position"><?= $position?></p>
										<?= $bio?>
									</div>									
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;?>
				<?php else : endif;?>
 				<?php endwhile;?> <?php endif;?>									
			</div>
		</div>
</section>
<?php endif;?>

<?php if( !is_page( 'about-us' ) ) :?>
<section class="fullWidthFeatureBlock whiteBg">

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
<?php endif;?>
<section class="enquiryForm">
    <div class="l-container">
        <h2>WANT TO KNOW MORE?</h2>
        <p>Please enter your details and a description of your enquiry below and we will be in touch as soon as possible. Thank you for your enquiry.</p>
		<?php echo do_shortcode('[ninja_form id=1]');?>		
	</div>
</section>

    
	
</main>



<?php get_footer(); ?>
