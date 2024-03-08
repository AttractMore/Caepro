<?php
/* Template Name: Service Category Template */
get_header();

$introductionSnippet = get_field("introduction_snippet");
$introductionHeading = get_field("introduction_heading");
$introductionContent = get_field("introduction_content");
$image = get_field("image");
$imageUrl = $image["url"];
$snippet = get_field("snippet");
$heading = get_field("heading");
$content = get_field("content");
$statement_block_heading = get_field("statement_block_heading");
$statement_block_content = get_field("statement_block_content");
$people = get_field("people");
$people_snippet = $people["snippet"];
$people_heading = $people["heading"];

$feature_block_secondary_snippet = get_field("feature_block_secondary_snippet");
$feature_block_secondary_heading = get_field("feature_block_secondary_heading");
$feature_block_secondary_content = get_field("feature_block_secondary_content");
$feature_block_secondary_image = get_field("feature_block_secondary_image");
$feature_block_secondary_imageUrl = $feature_block_secondary_image["url"];

// $feature_block_secondary_link = get_field('feature_block_secondary_link');
// $feature_block_secondary_linkUrl = $feature_block_secondary_link['url'];
// $feature_block_secondary_linkTitle = $feature_block_secondary_link['title']
?>

<main role="main">

<section class="introduction">
    <div class="l-container">
        <span class="tagline"><?= $introductionSnippet ?></span>
        <h2><?= $introductionHeading ?></h2>
        <div class="introduction-content">
            <?= $introductionContent ?>
        </div>
    </div>
</section>



<?php
$services = get_field("services");
if ($services) {
  $first_row = $services[0];
  $first_row_title = $first_row["sector_heading"];
  $first_row_summary = $first_row["sector_summary"];
  $first_row_summary_unformatted = strip_tags($first_row_summary);
  $first_row_link = $first_row["sector_link"];
  $first_row_linkUrl = $first_row_link["url"];
  $first_row_linkUrlTitle = $first_row_link["title"];

  $second_row = $services[1];
  $second_row_title = $second_row["sector_heading"];
  $second_row_summary = $second_row["sector_summary"];
  $second_row_summary_unformatted = strip_tags($second_row_summary);
  $second_row_link = $second_row["sector_link"];
  $second_row_linkUrl = $second_row_link["url"];
  $second_row_linkUrlTitle = $second_row_link["title"];

  $third_row = $services[2];
  $third_row_title = $third_row["sector_heading"];
  $third_row_summary = $third_row["sector_summary"];
  $third_row_summary_unformatted = strip_tags($third_row_summary);
  $third_row_link = $third_row["sector_link"];
  $third_row_linkUrl = $third_row_link["url"];
  $third_row_linkUrlTitle = $third_row_link["title"];

  $fourth_row = $services[3];
  $fourth_row_title = $fourth_row["sector_heading"];
  $fourth_row_summary = $fourth_row["sector_summary"];
  $fourth_row_summary_unformatted = strip_tags($fourth_row_summary);
  $fourth_row_link = $fourth_row["sector_link"];
  $fourth_row_linkUrl = $fourth_row_link["url"];
  $fourth_row_linkUrlTitle = $fourth_row_link["title"];
}
?>


	<section class="hoverGraphic leadImage">
		<div class="hoverGraphic-panel engineering">
			<h2>Our Services</h2>
			<div class="hoverGraphic-panel-content">
				<h3><?= $first_row_title ?></h3>	
				<p style="display:none;"><?= $first_row_summary_unformatted ?></p>
				<a href="<?= $first_row_linkUrl ?>" class="btn"><?= $first_row_linkUrlTitle ?></a>
			</div>
		</div>
		
		<div class="hoverGraphic-panel outsourcing">
			<div class="hoverGraphic-panel-content">
				<h3><?= $second_row_title ?></h3>	
				<p style="display:none;"><?= $second_row_summary_unformatted ?></p>
				<a href="<?= $second_row_linkUrl ?>" class="btn"><?= $second_row_linkUrlTitle ?></a>
			</div>
		</div>
		<div class="hoverGraphic-panel strategic">
			<div class="hoverGraphic-panel-content ">
				<h3><?= $third_row_title ?></h3>	
				<p style="display:none;"><?= $third_row_summary_unformatted ?></p>
				<a href="<?= $third_row_linkUrl ?>" class="btn"><?= $third_row_linkUrlTitle ?></a>
			</div>
		</div>
		<div class="hoverGraphic-panel india">
			<div class="hoverGraphic-panel-content">
				<h3><?= $fourth_row_title ?></h3>	
				<p style="display:none;"><?= $fourth_row_summary_unformatted ?></p>
				<a href="<?= $fourth_row_linkUrl ?>" class="btn"><?= $fourth_row_linkUrlTitle ?></a>
			</div>
		</div>
		
	</section>



<section class="enquiryForm">
    <div class="l-container">
        <h2>WANT TO KNOW MORE?</h2>
        <p>Please enter your details and a description of your enquiry below and we will be in touch as soon as possible. Thank you for your enquiry.</p>
		<?php echo do_shortcode("[ninja_form id=1]"); ?>		
	</div>
</section>

    
	
</main>



<?php get_footer(); ?>
